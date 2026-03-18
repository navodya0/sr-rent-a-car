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
          v.deposit_amount
        FROM vehicles v
        LEFT JOIN car_rental3 r
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
                FROM car_rental3
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

$securityDeposit = isset($row['deposit_amount']) && $row['deposit_amount'] !== ''
    ? number_format((float)$row['deposit_amount'], 2, '.', '')
    : '';

$baseTotal = $amount !== ''
    ? number_format((float)$amount, 2, '.', '')
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
$out .= '          <li>There is a security deposit</li>';
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
$out .= '            <h4>Deposit and payment cards</h4>';

$out .= '            <h5>Security deposit</h5>';
$out .= '            <p>The supplier will hold a deposit of € 700.00 on your card when you pick up the car. If no charges are incurred after the rental, it will be released.</p>';

$out .= '            <h5>Payment card</h5>';
$out .= '            <p>You’ll need a credit card in the main driver’s full name at pick-up for payment and any required deposit.</p>';

$out .= '            <h5>Accepted cards</h5>';
$out .= '            <ul>';
$out .= '              <li>American Express Credit</li>';
$out .= '              <li>Visa Credit</li>';
$out .= '              <li>MasterCard Credit</li>';
$out .= '            </ul>';

$out .= '            <h5>Not accepted</h5>';
$out .= '            <ul>';
$out .= '              <li>Debit cards</li>';
$out .= '              <li>Cards not in main driver&#39;s name or without numbers</li>';
$out .= '              <li>Virtual cards on your phone (e.g., Google Pay, Apple Pay, etc.)</li>';
$out .= '              <li>Visa Electron</li>';
$out .= '              <li>Cards issued by online-only banks</li>';
$out .= '            </ul>';

$out .= '            <h5>Please note</h5>';
$out .= '            <p>The card must have the number printed on it. The card must have chip and PIN capability.</p>';
$out .= '          </div>';

$out .= '          <div class="rentalModal__section">';
$out .= '            <h4>Included protection</h4>';
$out .= '            <p><strong>€ 700.00 excess / deductible</strong></p>';

$out .= '            <h5>Included insurance</h5>';

$out .= '            <h5>Collision Damage Waiver</h5>';
$out .= '            <p><strong>Deductible:</strong> € 700.00</p>';
$out .= '            <p>You&#39;ll have to pay at most the deductible if the car&#39;s bodywork is damaged (other parts of the car aren&#39;t covered).</p>';

$out .= '            <h5>Theft Protection</h5>';
$out .= '            <p>You&#39;ll have to pay at most the deductible if the car is stolen.</p>';

$out .= '            <h5>Third Party Liability (TPL)</h5>';
$out .= '            <p><strong>No limit</strong></p>';
$out .= '            <p>Mandatory coverage for injuries and damage you may cause to others while driving the car.</p>';
$out .= '          </div>';

$out .= '          <div class="rentalModal__section">';
$out .= '            <h4>Fuel policy</h4>';
$out .= '            <p><strong>Full to full</strong></p>';
$out .= '            <p>The vehicle is provided with a full tank of fuel and must be returned with the same amount in order to avoid additional charges.</p>';
$out .= '          </div>';

$out .= '          <div class="rentalModal__section">';
$out .= '            <h4>Mileage</h4>';
$out .= '            <p><strong>Unlimited mileage</strong></p>';
$out .= '            <p>There is no limit on how many kilometers/miles can be traveled.</p>';
$out .= '          </div>';

$out .= '          <div class="rentalModal__section">';
$out .= '            <h4>Driver Requirements</h4>';
$out .= '            <ul>';
$out .= '              <li>Minimum rental age is 21 years.</li>';
$out .= '              <li>A young driver fee applies to drivers under the age of 25.</li>';
$out .= '              <li>There is no maximum age.</li>';
$out .= '              <li>A Senior driver fee is not applied.</li>';
$out .= '              <li>The driver license must have been issued by authorized authorities at least 2 year(s) before the date of the commencement of the rental.</li>';
$out .= '              <li>A driver license printed using a non-Roman alphabet (Arabic, Japanese, Cyrillic, etc) must be supplemented by an International Driving Permit.</li>';
$out .= '              <li>Please note that the International Driving Permit is valid only if it is accompanied by a regular driver&#39;s license, is issued by an official authority or government-authorized organization, and is in physical (not digital) form.</li>';
$out .= '              <li>Licences issued in China are not accepted.</li>';
$out .= '              <li>In order to pick up the car, the following documents are required: passport, valid driver license, credit card on a main driver&#39;s name, booking voucher.</li>';
$out .= '            </ul>';
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
$out .= '          <strong id="js-rental-payment">' . ($amount !== '' ? '€ ' . $amount : 'N/A') . '</strong>';
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
$out .= '        <input type="hidden" name="rental_amount" id="js-post-rental-amount" value="' . htmlspecialchars($amount !== '' ? $amount : '0.00', ENT_QUOTES, 'UTF-8') . '">';
$out .= '        <input type="hidden" name="security_deposit" id="js-post-security-deposit" value="' . htmlspecialchars($securityDeposit !== '' ? $securityDeposit : '0.00', ENT_QUOTES, 'UTF-8') . '">';
$out .= '        <input type="hidden" name="extras_total" id="js-post-extras-total" value="0.00">';
$out .= '        <input type="hidden" name="grand_total" id="js-post-grand-total" value="' . htmlspecialchars($baseTotal !== '' ? $baseTotal : '0.00', ENT_QUOTES, 'UTF-8') . '">';
$out .= '        <input type="hidden" name="extras" id="js-post-extras" value="">';
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
  const rentalAmount = ' . json_encode((float)($amount !== '' ? $amount : 0)) . ';
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
