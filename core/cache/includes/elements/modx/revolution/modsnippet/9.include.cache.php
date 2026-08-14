<?php
require "assets/includes/db_connect.php";

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/**
 * Save selected vehicle from POST
 */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['vehicle_id']) || isset($_POST['car_code'])) {
        $_SESSION['selected_vehicle'] = [
            'vehicle_id' => trim($_POST['vehicle_id'] ?? ''),
            'car_code'   => trim($_POST['car_code'] ?? ''),
        ];
    }
}

$selectedVehicle = $_SESSION['selected_vehicle'] ?? [];
$search          = $_SESSION['rent_search'] ?? [];

$discountRaw = trim($_SESSION['rent_discount'] ?? '');
$offerCategory = trim($_SESSION['rent_offer_category'] ?? '');
$discountPercent = 0;

if ($discountRaw !== '') {
    $discountPercent = (int)preg_replace('/[^0-9]/', '', $discountRaw);
}

$vehicleId = isset($selectedVehicle['vehicle_id']) ? (int)$selectedVehicle['vehicle_id'] : 0;
$carCode   = trim($selectedVehicle['car_code'] ?? '');

$pickupDateTime  = trim($search['pickup_datetime'] ?? '');
$dropoffDateTime = trim($search['dropoff_datetime'] ?? '');
$pickupLocation  = trim($search['pickup_location'] ?? '');
$dropoffLocation = trim($search['dropoff_location'] ?? '');

// if dropoff is empty, use pickup location
if ($dropoffLocation === '') {
    $dropoffLocation = $pickupLocation;
}

if ($vehicleId <= 0 && $carCode === '') {
    return '<p>Vehicle not selected.</p>';
}

$pickupDate  = ($pickupDateTime !== '' && strtotime($pickupDateTime)) ? date('Y-m-d', strtotime($pickupDateTime)) : '';
$dropoffDate = ($dropoffDateTime !== '' && strtotime($dropoffDateTime)) ? date('Y-m-d', strtotime($dropoffDateTime)) : '';
$offerStartDate = trim($_SESSION['rent_offer_start_date'] ?? '');
$offerEndDate   = trim($_SESSION['rent_offer_end_date'] ?? '');
$days = 0;
if ($pickupDate && $dropoffDate) {
    $start = strtotime($pickupDate);
    $end   = strtotime($dropoffDate);

    if ($start && $end && $end >= $start) {
        $days = max(1, (int)(($end - $start) / 86400) + 1);
    }
}

$where = [];
$params = [];

if ($vehicleId > 0) {
    $where[] = "v.id = :vehicle_id";
    $params[':vehicle_id'] = $vehicleId;
} elseif ($carCode !== '') {
    $where[] = "v.car_code = :car_code";
    $params[':car_code'] = $carCode;
}

$sql = "SELECT
    v.id,
    v.image,
    v.car_model,
    v.car_category,
    v.car_code,
    v.pax_count,
    v.luggage_count,
    v.transmission_type,
    r.deposit_amount,
    r.damage_excess,
    r.theft_excess
FROM vehicles v
LEFT JOIN car_rental r
    ON r.car_code = v.car_code
    AND :pickup_date >= DATE(r.start_date)
    AND :dropoff_date <= DATE(r.end_date)
        WHERE " . implode(' AND ', $where) . "
        LIMIT 1";

$stmt = $modx->prepare($sql);
if (!$stmt) return '<p>Could not prepare deal query.</p>';

$stmt->bindValue(':pickup_date', $pickupDate, PDO::PARAM_STR);
$stmt->bindValue(':dropoff_date', $dropoffDate, PDO::PARAM_STR);

foreach ($params as $key => $value) {
    if ($key === ':vehicle_id') {
        $stmt->bindValue($key, $value, PDO::PARAM_INT);
    } else {
        $stmt->bindValue($key, $value, PDO::PARAM_STR);
    }
}

if (!$stmt->execute()) {
    $error = $stmt->errorInfo();
    return '<p>Could not load deal: ' . htmlspecialchars($error[2]) . '</p>';
}

$row = $stmt->fetch(PDO::FETCH_ASSOC);
if (!$row) return '<p>Vehicle deal not found.</p>';

if (!function_exists('step2CalculatePrice')) {
    function step2CalculatePrice($modx, $carCode, $pickupDate, $dropoffDate) {
        if (!$carCode || !$pickupDate || !$dropoffDate) return '';

        $start = strtotime($pickupDate);
        $end   = strtotime($dropoffDate);
        if (!$start || !$end || $end < $start) return '';

        $days = max(1, (int)(($end - $start) / 86400) + 1);

        $sql = "SELECT duration, rate
                FROM car_rental
                WHERE car_code = :car_code
                  AND :pickup_date >= DATE(start_date)
                  AND :dropoff_date <= DATE(end_date)
                ORDER BY duration ASC";

        $stmt = $modx->prepare($sql);
        if (!$stmt) return '';

        $stmt->bindValue(':car_code', $carCode, PDO::PARAM_STR);
        $stmt->bindValue(':pickup_date', $pickupDate, PDO::PARAM_STR);
        $stmt->bindValue(':dropoff_date', $dropoffDate, PDO::PARAM_STR);

        if (!$stmt->execute()) return '';

        $rates = [];
        foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $r) {
            $duration = (int)($r['duration'] ?? 0);
            $rate     = (float)($r['rate'] ?? 0);

            if ($duration > 0) {
                $rates[$duration] = $rate;
            }
        }

        if (!$rates) return '';

        ksort($rates);

        $maxDuration = max(array_keys($rates));
        $lastRate    = (float)$rates[$maxDuration];
        $total       = 0.0;

        for ($d = 1; $d <= $days; $d++) {
            if (isset($rates[$d])) {
                $total += (float)$rates[$d];
            } elseif ($d > $maxDuration) {
                $total += $lastRate;
            } else {
                // missing duration between 1 and max duration
                return '';
            }
        }

        return number_format($total, 2, '.', '');
    }
}

$amount = step2CalculatePrice($modx, $row['car_code'], $pickupDate, $dropoffDate);

$originalAmount = $amount !== '' ? (float)$amount : 0.00;
$discountedAmount = $originalAmount;

$vehicleCategory = trim((string)($row['car_category'] ?? ''));

$datesWithinOfferRange = false;

if (
    $pickupDate !== '' &&
    $dropoffDate !== '' &&
    $offerStartDate !== '' &&
    $offerEndDate !== ''
) {
    $datesWithinOfferRange = (
        $pickupDate >= $offerStartDate &&
        $dropoffDate <= $offerEndDate
    );
}

$discountAppliesToThisVehicle = (
    $discountPercent > 0 &&
    $originalAmount > 0 &&
    $offerCategory !== '' &&
    strcasecmp($vehicleCategory, $offerCategory) === 0 &&
    $datesWithinOfferRange
);

if ($discountAppliesToThisVehicle) {
    $discountedAmount = $originalAmount - (($originalAmount * $discountPercent) / 100);
}

$displayOriginalAmount = $originalAmount > 0 ? number_format($originalAmount, 2, '.', '') : '';
$displayDiscountedAmount = $discountedAmount > 0 ? number_format($discountedAmount, 2, '.', '') : '';

$securityDeposit = isset($row['deposit_amount']) && $row['deposit_amount'] !== ''
    ? number_format((float)$row['deposit_amount'], 2, '.', '')
    : '';

$damageExcess = isset($row['damage_excess']) && $row['damage_excess'] !== ''
    ? number_format((float)$row['damage_excess'], 2, '.', '')
    : '';

$theftExcess = isset($row['theft_excess']) && $row['theft_excess'] !== ''
    ? number_format((float)$row['theft_excess'], 2, '.', '')
    : '';

$baseTotal = $displayDiscountedAmount !== ''
    ? number_format((float)$displayDiscountedAmount, 2, '.', '')
    : '';


$pickupText = $pickupDateTime && strtotime($pickupDateTime) ? date('d M Y, H:i', strtotime($pickupDateTime)) : '';
$dropoffText = $dropoffDateTime && strtotime($dropoffDateTime) ? date('d M Y, H:i', strtotime($dropoffDateTime)) : '';

$extras = [];
$extraStmt = $modx->prepare("SELECT extra_id, name, description, price FROM extras ORDER BY extra_id ASC");
if ($extraStmt && $extraStmt->execute()) {
    $extras = $extraStmt->fetchAll(PDO::FETCH_ASSOC);
}

$out = '';
$out .= '<div class="premiumDealLayout">';

$out .= '  <div class="premiumDealLayout__main">';

$out .= '    <div class="premiumDealCard premiumDealCard--hero">';
if ($discountAppliesToThisVehicle) {
    $out .= '      <div class="premiumDiscountNotice">';
    $out .= '        <span class="premiumDiscountNotice__badge">Discount Applied</span>';
    $out .= '        <span class="premiumDiscountNotice__text">' . htmlspecialchars($discountRaw, ENT_QUOTES, 'UTF-8') . ' offer is active for this booking.</span>';
    $out .= '      </div>';
}

$out .= '      <div class="premiumDealCard__badges">';
$out .= '        <span class="premiumBadge premiumBadge--gold">Excellent service</span>';
$out .= '        <span class="premiumBadge premiumBadge--blue">Pay part now</span>';
$out .= '      </div>';

$out .= '      <div class="premiumDealHero">';
$out .= '        <div class="premiumDealHero__left">';
$out .= '          <div class="premiumDealHero__titleRow">';
$out .= '            <h2 class="premiumDealHero__title">' . htmlspecialchars($row['car_model']) . '</h2>';
$out .= '          </div>';

$out .= '          <div class="premiumDealHero__subtitleWrap">';
$out .= '             <div class="premiumDealHero__subtitle">or similar ' . htmlspecialchars($row['car_category']) . '</div>';
$out .= '             <div class="premiumInfoTooltip">';
$out .= '                 <button type="button" class="premiumInfoTrigger" aria-label="Vehicle availability information">';
$out .= '                     <img src="assets/images/information.svg" alt="Info" class="premiumInfoIcon">';
$out .= '                 </button>';

$out .= '                 <div class="premiumTooltipBox">';
$out .= '                     <strong class="mb-3">What does "or similar" mean?</strong>';
$out .= '                     <p>If the exact model isn’t available, you’ll get a car in the same category that’s the same size and has the same number of doors, transmission type, and features. This is standard for most car rental suppliers.</p>';
$out .= '                 </div>';

$out .= '             </div>';
$out .= '          </div>';
$out .= '          <div class="premiumSpecs">';
$out .= '            <span class="premiumSpecs__item">' . htmlspecialchars($row['transmission_type'] ?: 'Manual') . '</span>';
$out .= '            <span class="premiumSpecs__item">' . (int)$row['pax_count'] . ' Seats</span>';
$out .= '            <span class="premiumSpecs__item">' . (int)$row['luggage_count'] . ' Luggages</span>';
$out .= '            <span class="premiumSpecs__item">Air Conditioning</span>';
$out .= '          </div>';

$out .= '          <div class="premiumBookingMeta">';
if ($pickupLocation !== '') {
    $out .= '            <div><strong>Pick-up:</strong> ' . htmlspecialchars($pickupLocation) . ($pickupText ? ' <span class="premiumMuted">(' . htmlspecialchars($pickupText) . ')</span>' : '') . '</div>';
}
if ($dropoffLocation !== '') {
    $out .= '            <div><strong>Drop-off:</strong> ' . htmlspecialchars($dropoffLocation) . ($dropoffText ? ' <span class="premiumMuted">(' . htmlspecialchars($dropoffText) . ')</span>' : '') . '</div>';
}
$out .= '          </div>';
$out .= '        </div>';

$out .= '        <div class="premiumDealHero__right">';
$out .= '          <img src="' . htmlspecialchars($row['image']) . '" alt="' . htmlspecialchars($row['car_model']) . '" class="premiumDealHero__image">';
$out .= '        </div>';
$out .= '      </div>';
$out .= '    </div>';

$out .= '    <div class="premiumDealCard">';
$out .= '      <h3 class="premiumSectionTitle">Included in your offer</h3>';
$out .= '      <ul class="premiumIncludedList">';
$out .= '        <li>Unlimited mileage</li>';
$out .= '        <li>Theft Protection</li>';
$out .= '        <li>Third Party Liability (TPL)</li>';
$out .= '      </ul>';
$out .= '    </div>';

$out .= '    <div class="premiumDealCard premiumDealCard--soft">';
$out .= '      <div class="premiumCoverageBanner">';
$out .= '        <div class="premiumCoverageBanner__text">';
$out .= '          <strong>Add coverage in the next step...</strong><br>';
$out .= '        </div>';
$out .= '        <div class="premiumCoverageBanner__icon">🛡️</div>';
$out .= '      </div>';
$out .= '    </div>';

$out .= '    <div class="premiumDealCard">';
$out .= '      <div class="premiumInfoBlock">';
$out .= '        <h3 class="premiumSectionTitle premiumSectionTitle--sm">Important to know</h3>';
$out .= '        <ul class="premiumInfoList">';
$out .= '          <li>There is a security deposit of <strong>EUR ' . htmlspecialchars($securityDeposit) . '</strong> (if applicable)</li>';
$out .= '          <li>The damage excess for this vehicle is <strong>EUR ' . htmlspecialchars($damageExcess) . '</strong> (if applicable)</li>';
$out .= '          <li>The theft excess for this vehicle is <strong>EUR ' . htmlspecialchars($theftExcess) . '</strong> (if applicable)</li>';
$out .= '          <li>The supplier will hold/charge a deposit on the main driver&#39;s credit card at pick-up. If no charges are incurred after the rental, it will be released.</li>';
$out .= '        </ul>';
$out .= '      </div>';

$out .= '      <div class="premiumInfoBlock">';
$out .= '        <h3 class="premiumSectionTitle premiumSectionTitle--sm">Bring your documents</h3>';
$out .= '        <ul class="premiumInfoList">';
$out .= '          <li>Passport or ID card</li>';
$out .= '          <li>Driver&#39;s license</li>';
$out .= '        </ul>';
$out .= '      </div>';

$out .= '      <div class="premiumInfoBlock">';
$out .= '        <h3 class="premiumSectionTitle premiumSectionTitle--sm">Car has unlimited mileage</h3>';
$out .= '        <ul class="premiumInfoList">';
$out .= '          <li>There is no limit on how many kilometers/miles can be traveled.</li>';
$out .= '        </ul>';
$out .= '      </div>';

$out .= '      <button type="button" class="premiumConditionsBtn" id="openRentalConditions">See all rental conditions</button>';
$out .= '    </div>';

$out .= '    <div class="rentalModal" id="rentalConditionsModal" aria-hidden="true">';
$out .= '      <div class="rentalModal__backdrop" data-close-modal></div>';
$out .= '      <div class="rentalModal__dialog" role="dialog" aria-modal="true" aria-labelledby="rentalConditionsTitle">';
$out .= '        <button type="button" class="rentalModal__close" data-close-modal aria-label="Close">×</button>';
$out .= '        <h3 class="rentalModal__title" id="rentalConditionsTitle">Rental conditions</h3>';
$out .= '        <div class="rentalModal__content">';

$out .= '          <div class="rentalModal__section">';
$out .= '            <h4 style="text-align:center;color:#0d3b66;margin-bottom:8px;">🚗 General Terms &amp; Conditions</h4>';
$out .= '            <p style="text-align:center;color:#666;margin-bottom:20px;">SR Rent A Car Sri Lanka</p>';

$out .= '            <hr>';

$out .= '            <h5>👤 1. Driver Eligibility</h5>';
$out .= '            <p>Drivers must be between <strong>21 and 65 years</strong> of age.</p>';
$out .= '            <p>A Temporary Sri Lankan Driving License is required for all tourists.</p>';
$out .= '            <div style="background:#eef6ff;border-left:4px solid #0d6efd;padding:12px;margin:12px 0;border-radius:4px;">';
$out .= '              <strong>ℹ️ License Processing Service</strong><br>';
$out .= '              To drive legally in Sri Lanka, tourists are required to obtain a Sri Lankan Temporary Driving Permit. We can arrange this for you prior to your arrival for an additional fee.';
$out .= '            </div>';
$out .= '            <p><strong>Processing time:</strong> 2–3 working days</p>';
$out .= '            <p><strong>Fee:</strong> EUR 50 per license</p>';
$out .= '            <p><strong>Required Documents:</strong></p>';
$out .= '            <ul>';
$out .= '              <li>✓ A copy of your International Driving Permit (IDP)</li>';
$out .= '              <li>✓ A copy of your passport</li>';
$out .= '              <li>✓ A clear photo of yourself</li>';
$out .= '            </ul>';
$out .= '            <p>Please note that if you do not hold a valid International Driving Permit, it must be obtained from your home country, as we cannot issue the temporary driving license in Sri Lanka without it.</p>';
$out .= '            <p><strong>Send documents to:</strong> srilankarentacar@yahoo.com</p>';
$out .= '            <div style="background:#fff3cd;border-left:4px solid #ffc107;padding:12px;margin:12px 0;border-radius:4px;">';
$out .= '              <strong>⚠️ Note:</strong> Chinese nationals must provide an Embassy approved translation of the permit.';
$out .= '            </div>';
$out .= '            <p>Alternatively, you may obtain the temporary driving license upon arrival at the Bandaranaike International Airport (CMB). Please note that the process typically takes approximately 1–2 hours, depending on the crowd and processing time.</p>';

$out .= '            <hr>';

$out .= '            <h5>💳 2. Payments &amp; Deposit</h5>';
$out .= '            <p>Rental charges and refundable security deposit will be communicated separately.</p>';
$out .= '            <p><strong>Accepted payment methods for Security Deposit:</strong></p>';
$out .= '            <ul>';
$out .= '              <li>✓ Credit Cards (Visa / MasterCard / AMEX / JCB) – must be under the main or additional driver’s name</li>';
$out .= '              <li>✓ Cash (EUR / USD / GBP / CHF)</li>';
$out .= '            </ul>';
$out .= '            <p><strong>❌ Not Accepted:</strong> Debit cards, Traveler’s cheques, EURO cheques</p>';
$out .= '            <p><strong>Accepted payment methods for Rental:</strong></p>';
$out .= '            <ul>';
$out .= '              <li>✓ Credit Cards (Visa / MasterCard / AMEX)</li>';
$out .= '              <li>✓ Cash (EUR / USD / GBP / CHF)</li>';
$out .= '              <li>✓ Debit Cards</li>';
$out .= '            </ul>';

$out .= '            <hr>';

$out .= '            <h5>🛡️ 3. Rental Inclusions</h5>';
$out .= '            <p>All rates include:</p>';
$out .= '            <ul>';
$out .= '              <li>✓ VAT (local taxes)</li>';
$out .= '              <li>✓ Third-party liability insurance</li>';
$out .= '              <li>✓ Collision Damage Waiver (CDW)</li>';
$out .= '              <li>✓ Theft protection</li>';
$out .= '              <li>✓ Airport charges &amp; parking</li>';
$out .= '            </ul>';

$out .= '            <hr>';

$out .= '            <h5>🚨 4. Insurance &amp; Liability</h5>';
$out .= '            <p><strong>Collision Damage Waiver (CDW):</strong> Limits liability but an excess amount applies based on vehicle category.</p>';
$out .= '            <p><strong>Theft Waiver:</strong> Covers vehicle theft, excluding personal belongings.</p>';
$out .= '            <div style="background:#ffeaea;border-left:4px solid #dc3545;padding:12px;margin:12px 0;border-radius:4px;">';
$out .= '              <strong>⚠️ Customer Liability Includes:</strong>';
$out .= '              <ul style="margin-top:8px;margin-bottom:0;">';
$out .= '                <li>Tyres</li>';
$out .= '                <li>Windscreens &amp; glass</li>';
$out .= '                <li>Lights &amp; bumpers</li>';
$out .= '                <li>Roof &amp; undercarriage</li>';
$out .= '              </ul>';
$out .= '            </div>';
$out .= '            <p><strong>Excess Range:</strong> EUR 1,000 – EUR 3,000 depending on damage.</p>';
$out .= '            <p>We recommend obtaining additional travel insurance for full reimbursement.</p>';

$out .= '            <hr>';

$out .= '            <h5>✈️ 5. Airport &amp; Pickup Information</h5>';
$out .= '            <p><strong>Pickup Procedure:</strong> A representative will be waiting at the arrivals hall holding a sign with the customer’s name and “SR Rent A Car.” (24/7)</p>';
$out .= '            <p>In case of any issues upon arrival, please contact:</p>';
$out .= '            <ul>';
$out .= '              <li>📞 Airport Representative: +94 766 699 877</li>';
$out .= '              <li>☎️ SR Rent A Car Hotline: +94 777 780 729</li>';
$out .= '            </ul>';

$out .= '            <hr>';

$out .= '            <h5>🚗 6. Vehicle Usage Guidelines</h5>';
$out .= '            <p>Vehicles must be used responsibly and only on standard roads.</p>';
$out .= '            <div style="background:#ffeaea;border-left:4px solid #dc3545;padding:12px;margin:12px 0;border-radius:4px;">';
$out .= '              <strong>🚨 Strictly Prohibited:</strong>';
$out .= '              <ul style="margin-top:8px;margin-bottom:0;">';
$out .= '                <li>Safari use or national park driving</li>';
$out .= '                <li>Off-road or rough terrain driving</li>';
$out .= '                <li>Any illegal activities</li>';
$out .= '              </ul>';
$out .= '            </div>';
$out .= '            <p>Violation may result in fines up to EUR 1,000 or full damage cost.</p>';
$out .= '            <p><strong>All vehicles are GPS-tracked.</strong></p>';

$out .= '            <hr>';

$out .= '            <h5>⛽ 7. Fuel Policy</h5>';
$out .= '            <p>Vehicles are provided with a full tank.</p>';
$out .= '            <p>Must be returned with the same fuel level.</p>';
$out .= '            <p>Fuel shortages will be deducted from the deposit.</p>';

$out .= '            <hr>';

$out .= '            <h5>🧽 8. Condition of Vehicle</h5>';
$out .= '            <p>Must be returned in the same condition as provided.</p>';
$out .= '            <p><strong>Cleaning fee:</strong> EUR 35 if required.</p>';
$out .= '            <p>Smoking inside the vehicle is prohibited. The same penalty applies.</p>';

$out .= '            <hr>';

$out .= '            <h5>🎫 9. Security Requirements</h5>';
$out .= '            <p>Customers must present a return flight ticket upon vehicle collection as a security measure.</p>';

$out .= '            <hr>';

$out .= '            <h5>🚑 10. Accidents &amp; Breakdown</h5>';
$out .= '            <p>All incidents must be reported immediately.</p>';
$out .= '            <p><strong>Required:</strong></p>';
$out .= '            <ul>';
$out .= '              <li>✓ Police report</li>';
$out .= '              <li>✓ Photos of the accident</li>';
$out .= '            </ul>';
$out .= '            <div style="background:#ffeaea;border-left:4px solid #dc3545;padding:12px;margin:12px 0;border-radius:4px;">';
$out .= '              <strong>⚠️ Failure to report properly:</strong><br>';
$out .= '              Insurance claims cannot be processed and the customer must pay full damage cost.';
$out .= '            </div>';
$out .= '            <p>Depending on the circumstances, we reserve the right to withhold vehicle replacement. In such cases, customers are required to report to our head office to finalize a new Rental Agreement and acquire a replacement vehicle.</p>';

$out .= '            <hr>';

$out .= '            <h5>🔑 11. Key Loss or Damage</h5>';
$out .= '            <div style="background:#ffeaea;border-left:4px solid #dc3545;padding:12px;margin:12px 0;border-radius:4px;">';
$out .= '              Loss or damage of keys will result in full deposit deduction.';
$out .= '            </div>';

$out .= '            <hr>';

$out .= '            <h5>👥 12. Additional Drivers</h5>';
$out .= '            <p>Up to 2 additional drivers are allowed free of charge.</p>';

$out .= '            <hr>';

$out .= '            <h5>❌ 13. Cancellation Policy</h5>';
$out .= '            <p>All cancellations must be emailed to: <strong>srilankarentacar@yahoo.com</strong></p>';
$out .= '            <div style="background:#fff3cd;border-left:4px solid #ffc107;padding:12px;margin:12px 0;border-radius:4px;">';
$out .= '              Cancellations within 24 hours of arrival: <strong>100% charge applies.</strong>';
$out .= '            </div>';

$out .= '            <hr>';

$out .= '            <h5>↩️ 14. Early Returns</h5>';
$out .= '            <p>No refunds for unused rental days.</p>';
$out .= '            <p>Full rental amount will still be charged.</p>';

$out .= '            <hr>';

$out .= '            <h5>📋 15. Complaints &amp; Claims</h5>';
$out .= '            <p>Please be advised that all complaints and/or issues must be submitted to us in writing within 30 days from the date of departure from Sri Lanka. Any submissions received beyond this 30-day period from the vehicle drop-off date will not be processed.</p>';
$out .= '            <p>Additionally, we regret to inform you that we are unable to entertain requests for details pertaining to the aforementioned matters.</p>';

$out .= '            <hr>';

$out .= '            <h5>✅ 16. Booking Confirmation</h5>';
$out .= '            <div style="background:#e8f5e9;border-left:4px solid #28a745;padding:12px;margin:12px 0;border-radius:4px;">';
$out .= '              A valid voucher must be presented upon arrival. Failure to provide may result in booking not being honored.';
$out .= '            </div>';

$out .= '          </div>';

$out .= '        </div>';
$out .= '      </div>';
$out .= '    </div>';

$out .= '  </div>';

$out .= '  <aside class="premiumDealLayout__sidebar">';
$out .= '    <div class="premiumSummaryCard">';

$out .= '      <div class="premiumSummaryCard__block">';
$out .= '        <div class="premiumSummaryRow">';
$out .= '          <span>Rental Payment</span>';

if ($discountAppliesToThisVehicle && $displayOriginalAmount !== '' && $displayDiscountedAmount !== '') {
    $out .= '      <strong id="js-rental-payment">';
    $out .= '        <span style="display:block; text-decoration:line-through; color:#999 !important; font-size:14px; text-align: end;">€ ' . $displayOriginalAmount . '</span>';
    $out .= '        <span style="display:block; color:#d62828; font-size:22px; font-weight:700;">€ ' . $displayDiscountedAmount . '</span>';
    $out .= '      </strong>';
} else {
    $out .= '      <strong id="js-rental-payment">' . ($displayOriginalAmount !== '' ? '€ ' . $displayOriginalAmount : 'N/A') . '</strong>';
}
$out .= '        </div>';
$out .= '      </div>';

// $out .= '      <div class="premiumSummaryCard__block">';
// $out .= '        <div class="premiumSummaryRow">';
// $out .= '          <span>Security Deposit</span>';
// $out .= '          <strong id="js-security-deposit">' . ($securityDeposit !== '' ? '€' . $securityDeposit : 'N/A') . '</strong>';
// $out .= '        </div>';
// $out .= '      </div>';

if ($extras) {
    $out .= '      <div class="premiumSummaryCard__block premiumSummaryCard__extras">';
    $out .= '        <div class="premiumSummaryCard__heading">Optional extras</div>';
    $out .= '        <div class="extrasList">';

    foreach ($extras as $extra) {
        $extraId = (int)$extra['extra_id'];
        $extraName = htmlspecialchars($extra['name'] ?? '');
        $extraDescription = trim((string)($extra['description'] ?? ''));
        $extraPrice = number_format((float)($extra['price'] ?? 0), 2, '.', '');

        $out .= '          <label class="extraOption" data-extra-id="' . $extraId . '">';
        $out .= '            <input type="checkbox" class="extraOption__checkbox js-extra-check" value="' . $extraId . '" data-price="' . $extraPrice . '">';
        $out .= '            <div class="extraOption__main">';
        $out .= '              <div class="extraOption__checkWrap">';
        $out .= '                <span class="extraOption__fakebox"></span>';
        $out .= '              </div>';

        $out .= '              <div class="extraOption__info">';
        $out .= '                <div class="extraOption__title">' . $extraName . ($extraDescription !== '' ? ' <span class="extraOption__descInline">(' . htmlspecialchars($extraDescription) . ')</span>' : '') . '</div>';
        $out .= '                <div class="extraOption__price">€' . $extraPrice . ' for rental period</div>';
        $out .= '              </div>';

        $out .= '              <div class="extraOption__actions">';
        $out .= '                <div class="extraQty js-extra-qty-wrap" style="display:none;">';
        $out .= '                  <button type="button" class="extraQty__btn js-extra-minus" aria-label="Decrease">−</button>';
        $out .= '                  <input type="text" class="extraQty__input js-extra-qty" value="1" readonly>';
        $out .= '                  <button type="button" class="extraQty__btn js-extra-plus" aria-label="Increase">+</button>';
        $out .= '                </div>';
        $out .= '              </div>';
        $out .= '            </div>';
        $out .= '          </label>';
    }

    $out .= '        </div>';
    $out .= '        <p class="extrasNote">Please note that prices and availability of optional extras are fully controlled by the rental supplier and that prices are subject to change. Those listed here are to be used as a guide only.</p>';
    $out .= '      </div>';
}

$out .= '      <div class="premiumSummaryCard__block" id="js-extras-summary" style="display:none;">';
$out .= '        <div class="premiumSummaryRow">';
$out .= '          <span>Optional Extras</span>';
$out .= '          <strong id="js-extras-total">€0.00</strong>';
$out .= '        </div>';
$out .= '      </div>';

$out .= '      <div class="premiumSummaryCard__total">';
$out .= '        <span>Total for ' . (int)$days . ' ' . ($days === 1 ? 'day' : 'days') . '</span>';
$out .= '        <strong id="js-grand-total">' . ($baseTotal !== '' ? '€' . $baseTotal : 'Rate not available') . '</strong>';
$out .= '      </div>';

$out .= '      <div class="premiumPriceAlert">';
$out .= '        <strong>Don’t miss out!</strong> Prices are currently lower than usual.<br>';
$out .= '        Book now and save more.';
$out .= '      </div>';

$step3Link = $modx->makeUrl(43, '', [
    'vehicle_id'       => $vehicleId,
    'car_code'         => $carCode,
    'pickup_datetime'  => $pickupDateTime,
    'dropoff_datetime' => $dropoffDateTime,
    'pickup_location'  => $pickupLocation,
    'dropoff_location' => $dropoffLocation,
    'days'             => $days
]);

$step3Action = html_entity_decode($modx->makeUrl(43), ENT_QUOTES, 'UTF-8');

$out .= '      <form action="' . htmlspecialchars($step3Action, ENT_QUOTES, 'UTF-8') . '" method="post" id="js-step3-form">';
$out .= '        <input type="hidden" name="vehicle_id" value="' . (int)$vehicleId . '">';
$out .= '        <input type="hidden" name="car_code" value="' . htmlspecialchars($carCode, ENT_QUOTES, 'UTF-8') . '">';
$out .= '        <input type="hidden" name="pickup_datetime" value="' . htmlspecialchars($pickupDateTime, ENT_QUOTES, 'UTF-8') . '">';
$out .= '        <input type="hidden" name="dropoff_datetime" value="' . htmlspecialchars($dropoffDateTime, ENT_QUOTES, 'UTF-8') . '">';
$out .= '        <input type="hidden" name="pickup_location" value="' . htmlspecialchars($pickupLocation, ENT_QUOTES, 'UTF-8') . '">';
$out .= '        <input type="hidden" name="dropoff_location" value="' . htmlspecialchars($dropoffLocation, ENT_QUOTES, 'UTF-8') . '">';
$out .= '        <input type="hidden" name="days" value="' . (int)$days . '">';
$out .= '        <input type="hidden" name="rental_amount" id="js-post-rental-amount" value="' . htmlspecialchars($displayDiscountedAmount !== '' ? $displayDiscountedAmount : '0.00', ENT_QUOTES, 'UTF-8') . '">';

$out .= '        <input type="hidden" name="security_deposit" id="js-post-security-deposit" value="' . htmlspecialchars($securityDeposit !== '' ? $securityDeposit : '0.00', ENT_QUOTES, 'UTF-8') . '">';
$out .= '        <input type="hidden" name="extras_total" id="js-post-extras-total" value="0.00">';
$out .= '        <input type="hidden" name="grand_total" id="js-post-grand-total" value="' . htmlspecialchars($baseTotal !== '' ? $baseTotal : '0.00', ENT_QUOTES, 'UTF-8') . '">';
$out .= '        <input type="hidden" name="extras" id="js-post-extras" value="">';

$out .= '        <input type="hidden" name="discount_raw" value="' . htmlspecialchars($discountAppliesToThisVehicle ? $discountRaw : '', ENT_QUOTES, 'UTF-8') . '">';
$out .= '        <input type="hidden" name="discount_percent" value="' . ($discountAppliesToThisVehicle ? (int)$discountPercent : 0) . '">';
$out .= '        <input type="hidden" name="original_rental_amount" value="' . htmlspecialchars($displayOriginalAmount !== '' ? $displayOriginalAmount : '0.00', ENT_QUOTES, 'UTF-8') . '">';

$out .= '        <button type="submit" class="premiumContinueBtn" id="js-step3-submit">Continue to coverage</button>';
$out .= '      </form>';

$out .= '    </div>';
$out .= '  </aside>';

$out .= '</div>';


$out .= '<script>
document.addEventListener("DOMContentLoaded", function () {
  const checks = document.querySelectorAll(".js-extra-check");
  const extrasSummary = document.getElementById("js-extras-summary");
  const extrasTotalEl = document.getElementById("js-extras-total");
  const grandTotalEl = document.getElementById("js-grand-total");

  const postRentalAmount = document.getElementById("js-post-rental-amount");
  const postSecurityDeposit = document.getElementById("js-post-security-deposit");
  const postExtrasTotal = document.getElementById("js-post-extras-total");
  const postGrandTotal = document.getElementById("js-post-grand-total");
  const postExtras = document.getElementById("js-post-extras");

const baseTotal = ' . json_encode((float)($baseTotal !== '' ? $baseTotal : 0)) . ';
const rentalAmount = ' . json_encode((float)($displayDiscountedAmount !== '' ? $displayDiscountedAmount : 0)) . ';
  const securityDeposit = ' . json_encode((float)($securityDeposit !== '' ? $securityDeposit : 0)) . ';

  function money(val) {
    return "€" + Number(val).toFixed(2);
  }

  function updateExtraCard(label) {
    const check = label.querySelector(".js-extra-check");
    const qtyWrap = label.querySelector(".js-extra-qty-wrap");

    if (check.checked) {
      label.classList.add("is-selected");
      if (qtyWrap) qtyWrap.style.display = "flex";
    } else {
      label.classList.remove("is-selected");
      if (qtyWrap) qtyWrap.style.display = "none";
    }
  }

  function getSelectedExtras() {
    const selected = [];

    checks.forEach((check) => {
      const label = check.closest(".extraOption");
      const qtyInput = label ? label.querySelector(".js-extra-qty") : null;
      const qty = qtyInput ? parseInt(qtyInput.value, 10) || 1 : 1;
      const price = parseFloat(check.getAttribute("data-price") || "0");
      const extraId = check.value || "";
      const titleEl = label ? label.querySelector(".extraOption__title") : null;
      const title = titleEl ? titleEl.textContent.trim() : "";

      if (check.checked) {
        selected.push({
          id: extraId,
          name: title,
          qty: qty,
          price: price,
          total: price * qty
        });
      }
    });

    return selected;
  }

  function updatePostFields(extrasTotal, grandTotal) {
    if (postRentalAmount) postRentalAmount.value = Number(rentalAmount).toFixed(2);
    if (postSecurityDeposit) postSecurityDeposit.value = Number(securityDeposit).toFixed(2);
    if (postExtrasTotal) postExtrasTotal.value = Number(extrasTotal).toFixed(2);
    if (postGrandTotal) postGrandTotal.value = Number(grandTotal).toFixed(2);
    if (postExtras) postExtras.value = JSON.stringify(getSelectedExtras());
  }

  function calcTotals() {
    let extrasTotal = 0;

    checks.forEach((check) => {
      const label = check.closest(".extraOption");
      const qtyInput = label.querySelector(".js-extra-qty");
      const qty = qtyInput ? parseInt(qtyInput.value, 10) || 1 : 1;
      const price = parseFloat(check.getAttribute("data-price") || "0");

      if (check.checked) {
        extrasTotal += price * qty;
      }

      updateExtraCard(label);
    });

    if (extrasTotal > 0) {
      extrasSummary.style.display = "";
      extrasTotalEl.textContent = money(extrasTotal);
    } else {
      extrasSummary.style.display = "none";
      extrasTotalEl.textContent = money(0);
    }

    const grandTotal = baseTotal + extrasTotal;
    grandTotalEl.textContent = money(grandTotal);

    updatePostFields(extrasTotal, grandTotal);
  }

  checks.forEach((check) => {
    check.addEventListener("change", calcTotals);

    const label = check.closest(".extraOption");
    const minusBtn = label.querySelector(".js-extra-minus");
    const plusBtn = label.querySelector(".js-extra-plus");
    const qtyInput = label.querySelector(".js-extra-qty");

    if (minusBtn && qtyInput) {
      minusBtn.addEventListener("click", function (e) {
        e.preventDefault();
        e.stopPropagation();
        let val = parseInt(qtyInput.value, 10) || 1;
        val = Math.max(1, val - 1);
        qtyInput.value = val;
        calcTotals();
      });
    }

    if (plusBtn && qtyInput) {
      plusBtn.addEventListener("click", function (e) {
        e.preventDefault();
        e.stopPropagation();
        let val = parseInt(qtyInput.value, 10) || 1;
        if (val < 3) {
          qtyInput.value = val + 1;
          calcTotals();
        }
      });
    }
  });

  calcTotals();
});
</script>';

$out .= '<script>
function openVehicleInfoModal() {
  var modal = document.getElementById("vehicleInfoModal");
  if (!modal) return;
  modal.classList.add("is-active");
  modal.setAttribute("aria-hidden", "false");
  document.body.style.overflow = "hidden";
}

function closeVehicleInfoModal() {
  var modal = document.getElementById("vehicleInfoModal");
  if (!modal) return;
  modal.classList.remove("is-active");
  modal.setAttribute("aria-hidden", "true");
  document.body.style.overflow = "";
}

document.addEventListener("keydown", function(e) {
  if (e.key === "Escape") {
    closeVehicleInfoModal();
  }
});
</script>';
$out .= '<script>
document.addEventListener("DOMContentLoaded", function () {
  const modal = document.getElementById("rentalConditionsModal");
  const openBtn = document.getElementById("openRentalConditions");
  const closeBtns = modal ? modal.querySelectorAll("[data-close-modal]") : [];

  function openModal() {
    if (!modal) return;
    modal.classList.add("is-open");
    modal.setAttribute("aria-hidden", "false");
    document.body.style.overflow = "hidden";
  }

  function closeModal() {
    if (!modal) return;
    modal.classList.remove("is-open");
    modal.setAttribute("aria-hidden", "true");
    document.body.style.overflow = "";
  }

  if (openBtn) {
    openBtn.addEventListener("click", openModal);
  }

  closeBtns.forEach((btn) => {
    btn.addEventListener("click", closeModal);
  });

  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape") {
      closeModal();
    }
  });
});
</script>';

$out .= '<script>
document.addEventListener("DOMContentLoaded", function () {
  const checks = document.querySelectorAll(".js-extra-check");
  const extrasSummary = document.getElementById("js-extras-summary");
  const extrasTotalEl = document.getElementById("js-extras-total");
  const grandTotalEl = document.getElementById("js-grand-total");
  const baseTotal = ' . json_encode((float)($baseTotal !== '' ? $baseTotal : 0)) . ';

  function money(val) {
    return "€" + Number(val).toFixed(2);
  }

  function updateExtraCard(label) {
    const check = label.querySelector(".js-extra-check");
    const qtyWrap = label.querySelector(".js-extra-qty-wrap");
    if (check.checked) {
      label.classList.add("is-selected");
      if (qtyWrap) qtyWrap.style.display = "flex";
    } else {
      label.classList.remove("is-selected");
      if (qtyWrap) qtyWrap.style.display = "none";
    }
  }

  function calcTotals() {
    let extrasTotal = 0;

    checks.forEach((check) => {
      const label = check.closest(".extraOption");
      const qtyInput = label.querySelector(".js-extra-qty");
      const qty = qtyInput ? parseInt(qtyInput.value, 10) || 1 : 1;
      const price = parseFloat(check.getAttribute("data-price") || "0");

      if (check.checked) {
        extrasTotal += price * qty;
      }

      updateExtraCard(label);
    });

    if (extrasTotal > 0) {
      extrasSummary.style.display = "";
      extrasTotalEl.textContent = money(extrasTotal);
    } else {
      extrasSummary.style.display = "none";
      extrasTotalEl.textContent = money(0);
    }

    grandTotalEl.textContent = money(baseTotal + extrasTotal);
  }

  checks.forEach((check) => {
    check.addEventListener("change", calcTotals);

    const label = check.closest(".extraOption");
    const minusBtn = label.querySelector(".js-extra-minus");
    const plusBtn = label.querySelector(".js-extra-plus");
    const qtyInput = label.querySelector(".js-extra-qty");

    if (minusBtn && qtyInput) {
      minusBtn.addEventListener("click", function (e) {
        e.preventDefault();
        e.stopPropagation();
        let val = parseInt(qtyInput.value, 10) || 1;
        val = Math.max(1, val - 1);
        qtyInput.value = val;
        calcTotals();
      });
    }

    if (plusBtn && qtyInput) {
      plusBtn.addEventListener("click", function (e) {
        e.preventDefault();
        e.stopPropagation();
        let val = parseInt(qtyInput.value, 10) || 1;
        if (val < 3) {
          qtyInput.value = val + 1;
          calcTotals();
        }
      });
    }
  });

  calcTotals();
});
</script>';

return $out;
return;
