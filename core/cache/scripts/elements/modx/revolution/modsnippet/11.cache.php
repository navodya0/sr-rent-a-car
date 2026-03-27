<?php  return 'require_once MODX_BASE_PATH . \'assets/includes/db_connect.php\';



if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/*
|--------------------------------------------------------------------------
| Read booking data from session
|--------------------------------------------------------------------------
*/
$sessionBooking  = $_SESSION[\'booking_step3\'] ?? [];
$sessionCoverage = $_SESSION[\'booking_step4\'] ?? [];

/*
|--------------------------------------------------------------------------
| If arriving from coverage page by POST, save selected coverage in session
|--------------------------------------------------------------------------
*/
if ($_SERVER[\'REQUEST_METHOD\'] === \'POST\') {
    $_SESSION[\'booking_step4\'] = [
        \'coverage_id\'        => trim($_POST[\'coverage_id\'] ?? \'\'),
        \'coverage_db_id\'     => (int)($_POST[\'coverage_db_id\'] ?? 0),
        \'coverage_name\'      => trim($_POST[\'coverage_name\'] ?? \'\'),
        \'coverage_day_price\' => (float)($_POST[\'coverage_day_price\'] ?? 0),
        \'coverage_total\'     => (float)($_POST[\'coverage_total\'] ?? 0),
    ];

    $sessionCoverage = $_SESSION[\'booking_step4\'];
}


/*
|--------------------------------------------------------------------------
| Use session values, not URL/query-string values
|--------------------------------------------------------------------------
*/
$vehicleId       = isset($sessionBooking[\'vehicle_id\']) ? (int)$sessionBooking[\'vehicle_id\'] : 0;
$carCode         = trim($sessionBooking[\'car_code\'] ?? \'\');
$pickupDateTime  = trim($sessionBooking[\'pickup_datetime\'] ?? \'\');
$dropoffDateTime = trim($sessionBooking[\'dropoff_datetime\'] ?? \'\');
$pickupLocation  = trim($sessionBooking[\'pickup_location\'] ?? \'\');
$dropoffLocation = trim($sessionBooking[\'dropoff_location\'] ?? \'\');
$days            = isset($sessionBooking[\'days\']) ? (int)$sessionBooking[\'days\'] : 0;

$rentalAmount    = isset($sessionBooking[\'rental_amount\']) ? (float)$sessionBooking[\'rental_amount\'] : 0;
$securityDeposit = isset($sessionBooking[\'security_deposit\']) ? (float)$sessionBooking[\'security_deposit\'] : 0;
$extrasTotal     = isset($sessionBooking[\'extras_total\']) ? (float)$sessionBooking[\'extras_total\'] : 0;
$grandTotal      = isset($sessionBooking[\'grand_total\']) ? (float)$sessionBooking[\'grand_total\'] : 0;
$selectedExtras  = isset($sessionBooking[\'extras\']) && is_array($sessionBooking[\'extras\'])
    ? $sessionBooking[\'extras\']
    : [];

$discountRaw          = trim($sessionBooking[\'discount_raw\'] ?? \'\');
$discountPercent      = isset($sessionBooking[\'discount_percent\']) ? (int)$sessionBooking[\'discount_percent\'] : 0;
$originalRentalAmount = isset($sessionBooking[\'original_rental_amount\']) ? (float)$sessionBooking[\'original_rental_amount\'] : 0;

if ($rentalAmount <= 0) {
    if ($discountPercent > 0 && $originalRentalAmount > 0) {
        $rentalAmount = $originalRentalAmount - (($originalRentalAmount * $discountPercent) / 100);
    } elseif ($originalRentalAmount > 0) {
        $rentalAmount = $originalRentalAmount;
    } elseif ($grandTotal > 0) {
        $rentalAmount = max(0, $grandTotal - $extrasTotal);
    }
}

$coverageId       = trim($sessionCoverage[\'coverage_id\'] ?? \'\');
$coverageDbId     = isset($sessionCoverage[\'coverage_db_id\']) ? (int)$sessionCoverage[\'coverage_db_id\'] : 0;
$coverageName     = trim($sessionCoverage[\'coverage_name\'] ?? \'No coverage\');
$coverageDayPrice = isset($sessionCoverage[\'coverage_day_price\']) ? (float)$sessionCoverage[\'coverage_day_price\'] : 0;
$coverageTotal    = isset($sessionCoverage[\'coverage_total\']) ? (float)$sessionCoverage[\'coverage_total\'] : 0;

if ($vehicleId <= 0 && $carCode === \'\') {
    return \'<p>Vehicle not selected.</p>\';
}

$pickupDate  = ($pickupDateTime && strtotime($pickupDateTime)) ? date(\'Y-m-d\', strtotime($pickupDateTime)) : \'\';
$dropoffDate = ($dropoffDateTime && strtotime($dropoffDateTime)) ? date(\'Y-m-d\', strtotime($dropoffDateTime)) : \'\';

if ($days <= 0 && $pickupDate && $dropoffDate) {
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
    $params[\':vehicle_id\'] = $vehicleId;
} elseif ($carCode !== \'\') {
    $where[] = "v.car_code = :car_code";
    $params[\':car_code\'] = $carCode;
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
        WHERE " . implode(\' AND \', $where) . "
        LIMIT 1";

$stmt = $modx->prepare($sql);
if (!$stmt) return \'<p>Could not prepare driver details query.</p>\';

foreach ($params as $key => $value) {
    if ($key === \':vehicle_id\') {
        $stmt->bindValue($key, $value, PDO::PARAM_INT);
    } else {
        $stmt->bindValue($key, $value, PDO::PARAM_STR);
    }
}

$countryCodes = [];

$codeStmt = $modx->prepare("
    SELECT country_name, country_code
    FROM country_codes
    WHERE country_code IS NOT NULL AND country_code <> \'\'
    ORDER BY country_name ASC
");

if ($codeStmt && $codeStmt->execute()) {
    $countryCodes = $codeStmt->fetchAll(PDO::FETCH_ASSOC);
}

if (!$stmt->execute()) {
    $error = $stmt->errorInfo();
    return \'<p>Could not load vehicle: \' . htmlspecialchars($error[2], ENT_QUOTES, \'UTF-8\') . \'</p>\';
}

$row = $stmt->fetch(PDO::FETCH_ASSOC);
if (!$row) return \'<p>Vehicle not found.</p>\';

$pickupText  = $pickupDateTime && strtotime($pickupDateTime) ? date(\'d M Y, H:i\', strtotime($pickupDateTime)) : \'\';
$dropoffText = $dropoffDateTime && strtotime($dropoffDateTime) ? date(\'d M Y, H:i\', strtotime($dropoffDateTime)) : \'\';

if ($securityDeposit <= 0 && isset($row[\'deposit_amount\']) && $row[\'deposit_amount\'] !== \'\') {
    $securityDeposit = (float)$row[\'deposit_amount\'];
}

$chauffeurFeePerDay = 50;
$licenseFee   = 50;

$totalForTrip = $grandTotal > 0
    ? ($grandTotal + $coverageTotal)
    : ($rentalAmount + $extrasTotal + $coverageTotal);

$formAction = \'assets/includes/save_booking.php\';

$out = \'\';

$out .= \'<div class="driverStepLayout">\';
$out .= \'  <div class="row">\';

$out .= \'    <div class="col-lg-8">\';
$out .= \'      <div class="driverStepMain">\';

$out .= \'        <div class="driverStepHeading mb-4">\';
$out .= \'          <h2 class="driverStepHeading__title">Enter driver details</h2>\';

if ($discountPercent > 0 && $discountRaw !== \'\') {
    $out .= \'        <div class="driverDiscountNotice" style="margin-top:12px; padding:12px 14px; border-radius:12px; background:#fff7e8; border:1px solid #f2d089;">\';
    $out .= \'          <span style="display:inline-block; background:#ffd86b; color:#6b4a00; font-weight:700; font-size:12px; padding:5px 10px; border-radius:999px; margin-bottom:6px;">Discount Applied</span>\';
    $out .= \'          <div style="color:#6b4a00; font-size:14px; font-weight:600;">\' . htmlspecialchars($discountRaw, ENT_QUOTES, \'UTF-8\') . \' offer is active for this booking.</div>\';
    $out .= \'        </div>\';
}

$out .= \'        </div>\';

$out .= \'        <form action="\' . htmlspecialchars($formAction, ENT_QUOTES, \'UTF-8\') . \'" method="post" enctype="multipart/form-data" class="driverForm" id="driverDetailsForm">\';

$out .= \'          <div class="row">\';
$out .= \'            <div class="col-md-6 mb-0">\';
$out .= \'              <label class="driverForm__label">Full Name <span class="text-danger">*</span></label>\';
$out .= \'              <input type="text" name="full_name" class="form-control driverForm__control" placeholder="Full name" required>\';
$out .= \'              <small class="text-muted">Can only contain letters A-Z.</small>\';
$out .= \'            </div>\';

$out .= \'            <div class="col-md-6 mb-3">\';
$out .= \'              <label class="driverForm__label">Email <span class="text-danger">*</span></label>\';
$out .= \'              <input type="email" name="email" class="form-control driverForm__control" placeholder="Email" required>\';
$out .= \'            </div>\';

$out .= \'            <div class="col-md-6 mb-3">\';
$out .= \'              <label class="driverForm__label">Whatsapp Number <span class="text-danger">*</span></label>\';
$out .= \'              <div class="row gx-2">\';
$out .= \'                <div class="col-5 pr-0">\';
$out .= \'                  <select name="whatsapp_country_code" class="form-control driverForm__control" required>\';
$out .= \'                    <option value="">Code</option>\';

foreach ($countryCodes as $cc) {
    $countryName = trim((string)($cc[\'country_name\'] ?? \'\'));
    $countryCode = trim((string)($cc[\'country_code\'] ?? \'\'));

    if ($countryCode === \'\') {
        continue;
    }

    $optionText = $countryName !== \'\'
        ? $countryName . \' (\' . $countryCode . \')\'
        : $countryCode;

    $out .= \'                <option value="\' . htmlspecialchars($countryCode, ENT_QUOTES, \'UTF-8\') . \'">\'
         . htmlspecialchars($optionText, ENT_QUOTES, \'UTF-8\')
         . \'</option>\';
}

$out .= \'                  </select>\';
$out .= \'                </div>\';
$out .= \'                <div class="col-7 pl-0">\';
$out .= \'                  <input type="number" name="whatsapp_number" class="form-control driverForm__control" placeholder="Whatsapp Number" required>\';
$out .= \'                </div>\';
$out .= \'              </div>\';
$out .= \'            </div>\';

$out .= \'            <div class="col-md-6 mb-0">\';
$out .= \'              <label class="driverForm__label">Country of residence <span class="text-danger">*</span></label>\';
$out .= \'              <select name="country_of_residence" id="country_of_residence" class="form-control driverForm__control" required>\';
$out .= \'                <option value="">Loading countries...</option>\';
$out .= \'              </select>\';
$out .= \'            </div>\';

$out .= \'            <div class="col-md-6 mb-3">\';
$out .= \'              <label class="driverForm__label">Number of passengers <span class="text-danger">*</span></label>\';
$out .= \'              <input type="number" name="passengers" class="form-control driverForm__control" placeholder="Passenger Count" required>\';
$out .= \'            </div>\';

$out .= \'              <div class="col-md-6 mb-3">\';
$out .= \'                <label class="driverForm__label">Flight number <span class="text-muted">optional</span></label>\';
$out .= \'                <input type="text" name="flight_number" class="form-control driverForm__control" placeholder="AA123">\';
$out .= \'              </div>\';
$out .= \'          </div>\';

$out .= \'              <hr>\';


$out .= \'          <div class="driverFormSection mt-4">\';
$out .= \'            <h3 class="driverFormSection__title">Driver options </h3>\';
$out .= \'            <div class="row">\';
$out .= \'              <div class="col-md-6 mb-3">\';
$out .= \'                <label class="driverForm__label">Do you need a chauffeur? <span class="text-danger">*</span></label>\';
$out .= \'                <select name="need_chauffeur" id="need_chauffeur" class="form-control driverForm__control" required>\';
$out .= \'                  <option value="">Select</option>\';
$out .= \'                  <option value="yes">Yes</option>\';
$out .= \'                  <option value="no">No</option>\';
$out .= \'                </select>\';
$out .= \'              </div>\';
$out .= \'            </div>\';
$out .= \'          </div>\';

$out .= \'          <div class="driverFormSection mt-4" id="licenseSection" style="display:none;">\';
$out .= \'            <h3 class="driverFormSection__title">License and documents</h3>\';
$out .= \'            <div class="row">\';
$out .= \'              <div class="col-md-6 mb-3">\';
$out .= \'                <label class="driverForm__label">Do you need a Sri Lankan driver’s license?</label>\';
$out .= \'                <select name="need_sl_license" id="need_sl_license" class="form-control driverForm__control">\';
$out .= \'                  <option value="">Select</option>\';
$out .= \'                  <option value="yes">Yes</option>\';
$out .= \'                  <option value="no">No</option>\';
$out .= \'                </select>\';
$out .= \'              </div>\';
$out .= \'            </div>\';

$out .= \'            <div id="uploadSection" style="display:none;">\';
$out .= \'              <div class="row">\';
$out .= \'                <div class="col-md-6 mb-3">\';
$out .= \'                  <label class="driverForm__label">Passport image</label>\';
$out .= \'                  <input type="file" name="passport_image" class="form-control driverForm__control" accept="image/*,.pdf">\';
$out .= \'                </div>\';

$out .= \'                <div class="col-md-6 mb-3">\';
$out .= \'                  <label class="driverForm__label">IDP image</label>\';
$out .= \'                  <input type="file" name="idp_image" class="form-control driverForm__control" accept="image/*,.pdf">\';
$out .= \'                </div>\';

$out .= \'                <div class="col-md-6 mb-3">\';
$out .= \'                  <label class="driverForm__label">Color photo of applicant</label>\';
$out .= \'                  <input type="file" name="applicant_photo" class="form-control driverForm__control" accept="image/*">\';
$out .= \'                </div>\';
$out .= \'              </div>\';
$out .= \'            </div>\';
$out .= \'          </div>\';

$out .= \'                <div class="col-md-12 mb-3 px-0 pt-0">\';
$out .= \'                  <label class="driverForm__label">Notes</label>\';
$out .= \'                  <textarea name="remarks" class="form-control driverForm__control" rows="4" placeholder="Add any additional messages here..."></textarea>\';
$out .= \'                </div>\';

$out .= \'          <input type="hidden" name="vehicle_id" value="\' . (int)$vehicleId . \'">\';
$out .= \'          <input type="hidden" name="car_code" value="\' . htmlspecialchars($carCode, ENT_QUOTES, \'UTF-8\') . \'">\';
$out .= \'          <input type="hidden" name="pickup_datetime" value="\' . htmlspecialchars($pickupDateTime, ENT_QUOTES, \'UTF-8\') . \'">\';
$out .= \'          <input type="hidden" name="dropoff_datetime" value="\' . htmlspecialchars($dropoffDateTime, ENT_QUOTES, \'UTF-8\') . \'">\';
$out .= \'          <input type="hidden" name="pickup_location" value="\' . htmlspecialchars($pickupLocation, ENT_QUOTES, \'UTF-8\') . \'">\';
$out .= \'          <input type="hidden" name="dropoff_location" value="\' . htmlspecialchars($dropoffLocation, ENT_QUOTES, \'UTF-8\') . \'">\';
$out .= \'          <input type="hidden" name="days" value="\' . (int)$days . \'">\';
$out .= \'          <input type="hidden" name="coverage_id" value="\' . htmlspecialchars($coverageId, ENT_QUOTES, \'UTF-8\') . \'">\';
$out .= \'          <input type="hidden" name="coverage_db_id" value="\' . (int)$coverageDbId . \'">\';
$out .= \'          <input type="hidden" name="coverage_name" value="\' . htmlspecialchars($coverageName, ENT_QUOTES, \'UTF-8\') . \'">\';
$out .= \'          <input type="hidden" name="coverage_day_price" value="\' . number_format($coverageDayPrice, 2, \'.\', \'\') . \'">\';
$out .= \'          <input type="hidden" name="coverage_total" value="\' . number_format($coverageTotal, 2, \'.\', \'\') . \'">\';
$out .= \'          <input type="hidden" name="rental_amount" value="\' . number_format($rentalAmount, 2, \'.\', \'\') . \'">\';
$out .= \'          <input type="hidden" name="security_deposit" value="\' . number_format($securityDeposit, 2, \'.\', \'\') . \'">\';
$out .= \'          <input type="hidden" name="extras_total" value="\' . number_format($extrasTotal, 2, \'.\', \'\') . \'">\';
$out .= \'          <input type="hidden" name="grand_total" id="grand_total" value="\' . number_format($totalForTrip, 2, \'.\', \'\') . \'">\';
$out .= \'          <input type="hidden" name="extras" value="\' . htmlspecialchars(json_encode($selectedExtras), ENT_QUOTES, \'UTF-8\') . \'">\';
$out .= \'          <input type="hidden" name="discount_raw" value="\' . htmlspecialchars($discountRaw, ENT_QUOTES, \'UTF-8\') . \'">\';
$out .= \'          <input type="hidden" name="discount_percent" value="\' . (int)$discountPercent . \'">\';
$out .= \'          <input type="hidden" name="original_rental_amount" value="\' . number_format($originalRentalAmount, 2, \'.\', \'\') . \'">\';
$out .= \'          <input type="hidden" name="chauffeur_fee" id="chauffeur_fee" value="0">\';
$out .= \'          <input type="hidden" name="license_fee" id="license_fee" value="0">\';
$out .= \'          <input type="hidden" name="pay_now_discount" id="pay_now_discount" value="0">\';
$out .= \'              <hr>\';

$out .= \'          <div class="driverFormSection mt-4">\';
$out .= \'            <h3 class="driverFormSection__title">Payment option</h3>\';
$out .= \'            <div class="row">\';
$out .= \'              <div class="col-md-6 mb-3">\';
$out .= \'                <label class="driverForm__label">Choose payment option <span class="text-danger">*</span></label>\';
$out .= \'                <select name="payment_option" id="payment_option" class="form-control driverForm__control" required>\';
$out .= \'                  <option value="pay_on_arrival" selected>Pay at Counter</option>\';
$out .= \'                  <option value="pay_now">Pay now</option>\';
$out .= \'                </select>\';
$out .= \'              </div>\';
$out .= \'            </div>\';
$out .= \'          </div>\';


$out .= \'          <div id="bookingSubmitMessage" class="mt-3" style="display:none; color:#555; font-size:14px;">Your reservation is being processed...</div>\';

$out .= \'          <div class="mt-4 d-flex justify-content-end align-items-center">\';
$out .= \'            <button type="submit" id="bookingSubmitBtn" class="btn btn-primary bookingSubmitBtn">Make Reservation</button>\';
$out .= \'          </div>\';

$out .= \'        </form>\';
$out .= \'      </div>\';
$out .= \'    </div>\';

$out .= \'    <div class="col-lg-4">\';
$out .= \'      <aside class="driverSummaryCard">\';
$out .= \'        <div class="driverSummaryCard__vehicle mb-4">\';
$out .= \'          <div class="driverSummaryCard__dates">\';
$out .=                htmlspecialchars(($pickupText ? $pickupText : $pickupDate) . ($dropoffText ? \' - \' . $dropoffText : \'\'));
$out .= \'          </div>\';
$out .= \'          <div class="driverSummaryCard__car d-flex align-items-center justify-content-between">\';
$out .= \'            <div>\';
$out .= \'              <h4 class="driverSummaryCard__carTitle mb-1">\' . htmlspecialchars($row[\'car_model\']) . \'</h4>\';
$out .= \'              <div class="text-muted">or similar \' . htmlspecialchars($row[\'car_category\']) . \'</div>\';
$out .= \'            </div>\';
$out .= \'            <img src="\' . htmlspecialchars($row[\'image\']) . \'" alt="\' . htmlspecialchars($row[\'car_model\']) . \'" class="driverSummaryCard__image">\';
$out .= \'          </div>\';
$out .= \'        </div>\';

$out .= \'        <div class="driverSummaryCard__block mb-3">\';
$out .= \'          <h5 class="driverSummaryCard__blockTitle">Trip details</h5>\';
$out .= \'          <div class="driverSummaryRow"><span>Pick-up</span><strong>\' . htmlspecialchars($pickupLocation !== \'\' ? $pickupLocation : \'-\') . \'</strong></div>\';
$out .= \'          <div class="driverSummaryRow"><span>Drop-off</span><strong>\' . htmlspecialchars($dropoffLocation !== \'\' ? $dropoffLocation : \'-\') . \'</strong></div>\';
$out .= \'          <div class="driverSummaryRow"><span>Rental period</span><strong>\' . (int)$days . \' \' . ($days === 1 ? \'day\' : \'days\') . \'</strong></div>\';
$out .= \'          <div class="driverSummaryRow"><span>Coverage</span><strong>\' . htmlspecialchars($coverageName !== \'\' ? $coverageName : \'No coverage\') . \'</strong></div>\';
$out .= \'        </div>\';

if (!empty($selectedExtras)) {
    $out .= \'        <div class="driverSummaryCard__block mb-3">\';
    $out .= \'          <h5 class="driverSummaryCard__blockTitle">Selected extras</h5>\';
    foreach ($selectedExtras as $extra) {
        $extraName  = htmlspecialchars($extra[\'name\'] ?? \'\', ENT_QUOTES, \'UTF-8\');
        $extraQty   = (int)($extra[\'qty\'] ?? 1);
        $extraValue = isset($extra[\'total\']) ? (float)$extra[\'total\'] : 0;
        $out .= \'    <div class="driverSummaryRow"><span>\' . $extraName . \' × \' . $extraQty . \'</span><strong>€\' . number_format($extraValue, 2, \'.\', \'\') . \'</strong></div>\';
    }
    $out .= \'        </div>\';
}

$out .= \'        <div class="driverSummaryCard__block mb-3">\';
$out .= \'          <h5 class="driverSummaryCard__blockTitle">Price summary</h5>\';
$out .= \'          <div class="driverSummaryRow"><span>Coverage price</span><strong>€ \' . number_format($coverageTotal, 2, \'.\', \',\') . \'</strong></div>\';
$out .= \'          <div class="driverSummaryRow"><span>Extras price</span><strong>€ \' . number_format($extrasTotal, 2, \'.\', \',\') . \'</strong></div>\';
if ($discountPercent > 0 && $originalRentalAmount > 0 && $rentalAmount > 0) {
    $out .= \'          <div class="driverSummaryRow">\';
    $out .= \'            <span>Rental amount</span>\';
    $out .= \'            <strong>\';
    $out .= \'              <span style="display:block; text-decoration:line-through; color:#999; font-size:13px;">€ \' . number_format($originalRentalAmount, 2, \'.\', \',\') . \'</span>\';
    $out .= \'              <span class="discount" style="display:block; color:#d62828; font-size:16px; font-weight:700;">€ \' . number_format($rentalAmount, 2, \'.\', \',\') . \'</span>\';
    $out .= \'            </strong>\';
    $out .= \'          </div>\';

    $out .= \'          <div class="driverSummaryMuted" style="margin-bottom:10px;">\';
    $out .= \'            Discount applied: \' . htmlspecialchars($discountRaw, ENT_QUOTES, \'UTF-8\');
    $out .= \'          </div>\';
} else {
    $out .= \'          <div class="driverSummaryRow"><span>Rental amount</span><strong>€ \' . number_format($rentalAmount, 2, \'.\', \',\') . \'</strong></div>\';
}
$out .= \'          <div class="driverSummaryRow"><span>Chauffeur fee (€50 × \' . (int)$days . \' days)</span><strong id="chauffeurFeeText">€ 0.00</strong></div>\';
$out .= \'          <div class="driverSummaryRow"><span>License fee</span><strong id="licenseFeeText">€ 0.00</strong></div>\';
$out .= \'          <div class="driverSummaryRow driverSummaryRow--total">\';
$out .= \'              <span>Total for \' . (int)$days . \' \' . ($days === 1 ? \'day\' : \'days\') . \'</span>\';
$out .= \'              <strong class="driverSummaryTotalPrice" id="driverSummaryTotalPrice">€ \' . number_format($totalForTrip, 2, \'.\', \',\') . \'</strong>\';
$out .= \'          </div>\';

$out .= \'      </aside>\';
$out .= \'    </div>\';

$out .= \'  </div>\';
$out .= \'</div>\';

$out .= \'<script>
document.addEventListener("DOMContentLoaded", function () {
    var needChauffeur = document.getElementById("need_chauffeur");
    var needSlLicense = document.getElementById("need_sl_license");
    var licenseSection = document.getElementById("licenseSection");
    var uploadSection = document.getElementById("uploadSection");
    var paymentOption = document.getElementById("payment_option");
    var bookingSubmitBtn = document.getElementById("bookingSubmitBtn");

    var payOnArrivalAction = "assets/includes/save_booking.php";
    var payNowAction = "assets/includes/payhere_checkout.php";

    var chauffeurFeeInput = document.getElementById("chauffeur_fee");
    var licenseFeeInput = document.getElementById("license_fee");
    var grandTotalInput = document.getElementById("grand_total");

    var chauffeurFeeText = document.getElementById("chauffeurFeeText");
    var licenseFeeText = document.getElementById("licenseFeeText");
    var totalPriceText = document.getElementById("driverSummaryTotalPrice");

    var countrySelect = document.getElementById("country_of_residence");
    var driverDetailsForm = document.getElementById("driverDetailsForm");
    var bookingSubmitMessage = document.getElementById("bookingSubmitMessage");

    var baseTotal = \' . json_encode((float)$totalForTrip) . \';
    var days = \' . (int)$days . \';
    var chauffeurFeePerDay = 50;
    var licenseFeeAmount = 50;
    var payNowDiscountPercent = 5;

    function formatEuro(amount) {
        return "€ " + amount.toLocaleString(undefined, {
            minimumFractionDigits: 2,
            maximumFractionDigits: 2
        });
    }

    function ensurePaymentMessageBox() {
        var box = document.getElementById("paymentSavingsMessage");
        if (!box) {
            box = document.createElement("div");
            box.id = "paymentSavingsMessage";
            box.style.marginTop = "10px";
            box.style.padding = "10px 12px";
            box.style.borderRadius = "10px";
            box.style.fontSize = "14px";
            box.style.fontWeight = "500";

            if (paymentOption && paymentOption.parentNode) {
                paymentOption.parentNode.appendChild(box);
            }
        }
        return box;
    }

    function ensurePayNowDiscountRow() {
        var totalRow = document.querySelector(".driverSummaryRow--total");
        var row = document.getElementById("payNowDiscountRow");

        if (!row && totalRow && totalRow.parentNode) {
            row = document.createElement("div");
            row.id = "payNowDiscountRow";
            row.className = "driverSummaryRow";
            row.style.display = "none";
            row.innerHTML = "<span>Pay now discount (5%)</span><strong id=\\"payNowDiscountText\\">-€ 0.00</strong>";
            totalRow.parentNode.insertBefore(row, totalRow);
        }

        return row;
    }

    function updatePricing() {
        var chauffeurFee = 0;
        var licenseFee = 0;

        if (needChauffeur && needChauffeur.value === "yes") {
            chauffeurFee = chauffeurFeePerDay * days;
        }

        if (needSlLicense && needSlLicense.value === "yes") {
            licenseFee = licenseFeeAmount;
        }

        var subtotal = baseTotal + chauffeurFee + licenseFee;
        var payNowDiscount = 0;

        if (paymentOption && paymentOption.value === "pay_now") {
            payNowDiscount = subtotal * (payNowDiscountPercent / 100);
        }

        var finalTotal = subtotal - payNowDiscount;

        if (chauffeurFeeInput) chauffeurFeeInput.value = chauffeurFee.toFixed(2);
        if (licenseFeeInput) licenseFeeInput.value = licenseFee.toFixed(2);

        if (chauffeurFeeText) chauffeurFeeText.textContent = formatEuro(chauffeurFee);
        if (licenseFeeText) licenseFeeText.textContent = formatEuro(licenseFee);

        if (grandTotalInput) grandTotalInput.value = finalTotal.toFixed(2);
        if (totalPriceText) totalPriceText.textContent = formatEuro(finalTotal);

        var discountRow = ensurePayNowDiscountRow();
        var discountText = document.getElementById("payNowDiscountText");

        if (discountRow && discountText) {
            if (payNowDiscount > 0) {
                discountRow.style.display = "flex";
                discountText.textContent = "- " + formatEuro(payNowDiscount);
            } else {
                discountRow.style.display = "none";
                discountText.textContent = "- " + formatEuro(0);
            }
        }

        var paymentMsg = ensurePaymentMessageBox();
        if (paymentMsg) {
            if (paymentOption && paymentOption.value === "pay_on_arrival") {
                var savingAmount = subtotal * (payNowDiscountPercent / 100);
                paymentMsg.style.display = "block";
                paymentMsg.style.background = "#F9F9F9";
                paymentMsg.style.border = "1px solid #880808";
                paymentMsg.style.color = "#880808";
                paymentMsg.innerHTML = "Get 5% discount by paying now and save <strong>" + formatEuro(savingAmount) + "</strong>.";
            } else if (paymentOption && paymentOption.value === "pay_now") {
                paymentMsg.style.display = "block";
                paymentMsg.style.background = "#fff7e8";
                paymentMsg.style.border = "1px solid #f2d089";
                paymentMsg.style.color = "#6b4a00";
                paymentMsg.innerHTML = "5% discount applied to your total.";
            } else {
                paymentMsg.style.display = "none";
            }
        }
    }

    if (driverDetailsForm && bookingSubmitBtn) {
        driverDetailsForm.addEventListener("submit", function () {
            bookingSubmitBtn.disabled = true;
            bookingSubmitBtn.textContent = paymentOption && paymentOption.value === "pay_now" ? "Redirecting..." : "Submitting...";
            bookingSubmitBtn.style.opacity = "0.7";
            bookingSubmitBtn.style.cursor = "not-allowed";

            if (bookingSubmitMessage) {
                bookingSubmitMessage.textContent = paymentOption && paymentOption.value === "pay_now"
                    ? "Redirecting to payment..."
                    : "Your reservation is being processed...";
                bookingSubmitMessage.style.display = "block";
            }
        });
    }

    function toggleSections() {
        if (!needChauffeur || !licenseSection) return;

        if (needChauffeur.value === "no") {
            licenseSection.style.display = "block";
        } else {
            licenseSection.style.display = "none";
            if (needSlLicense) needSlLicense.value = "";
            if (uploadSection) uploadSection.style.display = "none";
        }

        updatePricing();
    }

    function loadCountries() {
        if (!countrySelect) return;

        fetch("https://restcountries.com/v3.1/all?fields=name")
            .then(function (response) {
                return response.json();
            })
            .then(function (countries) {
                if (!Array.isArray(countries)) return;

                countries.sort(function (a, b) {
                    var nameA = (a.name && a.name.common ? a.name.common : "").toLowerCase();
                    var nameB = (b.name && b.name.common ? b.name.common : "").toLowerCase();
                    return nameA.localeCompare(nameB);
                });

                countrySelect.innerHTML = "<option value=\\"\\">Select country</option>";

                countries.forEach(function (country) {
                    var name = country.name && country.name.common ? country.name.common : "";
                    if (!name) return;

                    var option = document.createElement("option");
                    option.value = name;
                    option.textContent = name;
                    countrySelect.appendChild(option);
                });
            })
            .catch(function () {
                countrySelect.innerHTML = "<option value=\\"\\">Could not load countries</option>";
            });
    }

    function toggleUploads() {
        if (!needSlLicense || !uploadSection) return;

        if (needSlLicense.value === "yes") {
            uploadSection.style.display = "block";
        } else {
            uploadSection.style.display = "none";
        }

        updatePricing();
    }

    function togglePaymentButton() {
        if (!paymentOption || !bookingSubmitBtn || !driverDetailsForm) return;

        if (paymentOption.value === "pay_on_arrival") {
            bookingSubmitBtn.textContent = "Make Reservation";
            driverDetailsForm.action = payOnArrivalAction;
        } else if (paymentOption.value === "pay_now") {
            bookingSubmitBtn.textContent = "Pay Now";
            driverDetailsForm.action = payNowAction;
        }

        updatePricing();
    }

    if (needChauffeur) needChauffeur.addEventListener("change", toggleSections);
    if (needSlLicense) needSlLicense.addEventListener("change", toggleUploads);
    if (paymentOption) paymentOption.addEventListener("change", togglePaymentButton);

    toggleSections();
    toggleUploads();
    togglePaymentButton();
    updatePricing();
    loadCountries();
});
</script>\';

return $out;
return;
';