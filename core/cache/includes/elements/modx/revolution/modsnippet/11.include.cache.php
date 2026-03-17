<?php
require "assets/includes/db_connect.php";

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/*
|--------------------------------------------------------------------------
| Read booking data from session
|--------------------------------------------------------------------------
*/
$sessionBooking  = $_SESSION['booking_step3'] ?? [];
$sessionCoverage = $_SESSION['booking_step4'] ?? [];

/*
|--------------------------------------------------------------------------
| If arriving from coverage page by POST, save selected coverage in session
|--------------------------------------------------------------------------
*/
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['booking_step4'] = [
        'coverage_id'        => trim($_POST['coverage_id'] ?? ''),
        'coverage_db_id'     => (int)($_POST['coverage_db_id'] ?? 0),
        'coverage_name'      => trim($_POST['coverage_name'] ?? ''),
        'coverage_day_price' => (float)($_POST['coverage_day_price'] ?? 0),
        'coverage_total'     => (float)($_POST['coverage_total'] ?? 0),
    ];

    $sessionCoverage = $_SESSION['booking_step4'];
}

/*
|--------------------------------------------------------------------------
| Use session values, not URL/query-string values
|--------------------------------------------------------------------------
*/
$vehicleId       = isset($sessionBooking['vehicle_id']) ? (int)$sessionBooking['vehicle_id'] : 0;
$carCode         = trim($sessionBooking['car_code'] ?? '');
$pickupDateTime  = trim($sessionBooking['pickup_datetime'] ?? '');
$dropoffDateTime = trim($sessionBooking['dropoff_datetime'] ?? '');
$pickupLocation  = trim($sessionBooking['pickup_location'] ?? '');
$dropoffLocation = trim($sessionBooking['dropoff_location'] ?? '');
$days            = isset($sessionBooking['days']) ? (int)$sessionBooking['days'] : 0;

$rentalAmount    = isset($sessionBooking['rental_amount']) ? (float)$sessionBooking['rental_amount'] : 0;
$securityDeposit = isset($sessionBooking['security_deposit']) ? (float)$sessionBooking['security_deposit'] : 0;
$extrasTotal     = isset($sessionBooking['extras_total']) ? (float)$sessionBooking['extras_total'] : 0;
$grandTotal      = isset($sessionBooking['grand_total']) ? (float)$sessionBooking['grand_total'] : 0;
$selectedExtras  = isset($sessionBooking['extras']) && is_array($sessionBooking['extras'])
    ? $sessionBooking['extras']
    : [];

$coverageId       = trim($sessionCoverage['coverage_id'] ?? '');
$coverageDbId     = isset($sessionCoverage['coverage_db_id']) ? (int)$sessionCoverage['coverage_db_id'] : 0;
$coverageName     = trim($sessionCoverage['coverage_name'] ?? 'No coverage');
$coverageDayPrice = isset($sessionCoverage['coverage_day_price']) ? (float)$sessionCoverage['coverage_day_price'] : 0;
$coverageTotal    = isset($sessionCoverage['coverage_total']) ? (float)$sessionCoverage['coverage_total'] : 0;

if ($vehicleId <= 0 && $carCode === '') {
    return '<p>Vehicle not selected.</p>';
}

$pickupDate  = ($pickupDateTime && strtotime($pickupDateTime)) ? date('Y-m-d', strtotime($pickupDateTime)) : '';
$dropoffDate = ($dropoffDateTime && strtotime($dropoffDateTime)) ? date('Y-m-d', strtotime($dropoffDateTime)) : '';

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
        WHERE " . implode(' AND ', $where) . "
        LIMIT 1";

$stmt = $modx->prepare($sql);
if (!$stmt) return '<p>Could not prepare driver details query.</p>';

foreach ($params as $key => $value) {
    if ($key === ':vehicle_id') {
        $stmt->bindValue($key, $value, PDO::PARAM_INT);
    } else {
        $stmt->bindValue($key, $value, PDO::PARAM_STR);
    }
}

if (!$stmt->execute()) {
    $error = $stmt->errorInfo();
    return '<p>Could not load vehicle: ' . htmlspecialchars($error[2], ENT_QUOTES, 'UTF-8') . '</p>';
}

$row = $stmt->fetch(PDO::FETCH_ASSOC);
if (!$row) return '<p>Vehicle not found.</p>';

$pickupText  = $pickupDateTime && strtotime($pickupDateTime) ? date('d M Y, H:i', strtotime($pickupDateTime)) : '';
$dropoffText = $dropoffDateTime && strtotime($dropoffDateTime) ? date('d M Y, H:i', strtotime($dropoffDateTime)) : '';

if ($securityDeposit <= 0 && isset($row['deposit_amount']) && $row['deposit_amount'] !== '') {
    $securityDeposit = (float)$row['deposit_amount'];
}

$totalForTrip = $grandTotal > 0
    ? ($grandTotal + $coverageTotal)
    : ($rentalAmount + $extrasTotal + $coverageTotal);

$paymentPageId = 44; // change to your payment page resource id
$formAction = html_entity_decode($modx->makeUrl($paymentPageId), ENT_QUOTES, 'UTF-8');

$out = '';

$out .= '<div class="driverStepLayout">';
$out .= '  <div class="row">';

$out .= '    <div class="col-lg-8">';
$out .= '      <div class="driverStepMain">';

$out .= '        <div class="driverStepHeading mb-4">';
$out .= '          <h2 class="driverStepHeading__title">Enter driver details</h2>';
$out .= '        </div>';

$out .= '        <form action="' . htmlspecialchars($formAction, ENT_QUOTES, 'UTF-8') . '" method="post" enctype="multipart/form-data" class="driverForm" id="driverDetailsForm">';

$out .= '          <div class="row">';

$out .= '            <div class="col-md-6 mb-0">';
$out .= '              <label class="driverForm__label">Full Name</label>';
$out .= '              <input type="text" name="full_name" class="form-control driverForm__control" placeholder="Full name" required>';
$out .= '              <small class="text-muted">Can only contain letters A-Z.</small>';
$out .= '            </div>';

$out .= '            <div class="col-md-6 mb-3">';
$out .= '              <label class="driverForm__label">Email</label>';
$out .= '              <input type="email" name="email" class="form-control driverForm__control" placeholder="Email" required>';
$out .= '            </div>';

$out .= '            <div class="col-md-6 mb-3">';
$out .= '              <label class="driverForm__label">Whatsapp Number</label>';
$out .= '              <input type="text" name="whatsapp_number" class="form-control driverForm__control" placeholder="Whatsapp Number" required>';
$out .= '            </div>';

$out .= '            <div class="col-md-6 mb-0">';
$out .= '              <label class="driverForm__label">Country of residence</label>';
$out .= '              <input type="text" name="country_of_residence" class="form-control driverForm__control" placeholder="Country of residence" required>';
$out .= '            </div>';

$out .= '            <div class="col-md-6 mb-3">';
$out .= '              <label class="driverForm__label">Number of passengers</label>';
$out .= '              <input type="number" name="passengers" class="form-control driverForm__control" placeholder="Passenger Count" required>';
$out .= '            </div>';

$out .= '              <div class="col-md-6 mb-3">';
$out .= '                <label class="driverForm__label">Flight number <span class="text-muted">optional</span></label>';
$out .= '                <input type="text" name="flight_number" class="form-control driverForm__control" placeholder="AA123">';
$out .= '              </div>';
$out .= '          </div>';

$out .= '              <hr>';


$out .= '          <div class="driverFormSection mt-4">';
$out .= '            <h3 class="driverFormSection__title">Driver options</h3>';
$out .= '            <div class="row">';
$out .= '              <div class="col-md-6 mb-3">';
$out .= '                <label class="driverForm__label">Do you need a chauffeur?</label>';
$out .= '                <select name="need_chauffeur" id="need_chauffeur" class="form-control driverForm__control" required>';
$out .= '                  <option value="">Select</option>';
$out .= '                  <option value="yes">Yes</option>';
$out .= '                  <option value="no">No</option>';
$out .= '                </select>';
$out .= '              </div>';
$out .= '            </div>';
$out .= '          </div>';

$out .= '          <div class="driverFormSection mt-4" id="licenseSection" style="display:none;">';
$out .= '            <h3 class="driverFormSection__title">License and documents</h3>';
$out .= '            <div class="row">';
$out .= '              <div class="col-md-6 mb-3">';
$out .= '                <label class="driverForm__label">Do you need a Sri Lankan driver’s license?</label>';
$out .= '                <select name="need_sl_license" id="need_sl_license" class="form-control driverForm__control">';
$out .= '                  <option value="">Select</option>';
$out .= '                  <option value="yes">Yes</option>';
$out .= '                  <option value="no">No</option>';
$out .= '                </select>';
$out .= '              </div>';
$out .= '            </div>';

$out .= '            <div id="uploadSection" style="display:none;">';
$out .= '              <div class="row">';
$out .= '                <div class="col-md-6 mb-3">';
$out .= '                  <label class="driverForm__label">Passport image</label>';
$out .= '                  <input type="file" name="passport_image" class="form-control driverForm__control" accept="image/*,.pdf">';
$out .= '                </div>';

$out .= '                <div class="col-md-6 mb-3">';
$out .= '                  <label class="driverForm__label">IDP image</label>';
$out .= '                  <input type="file" name="idp_image" class="form-control driverForm__control" accept="image/*,.pdf">';
$out .= '                </div>';

$out .= '                <div class="col-md-6 mb-3">';
$out .= '                  <label class="driverForm__label">Color photo of applicant</label>';
$out .= '                  <input type="file" name="applicant_photo" class="form-control driverForm__control" accept="image/*">';
$out .= '                </div>';

$out .= '                <div class="col-md-12 mb-3">';
$out .= '                  <label class="driverForm__label">Remarks</label>';
$out .= '                  <textarea name="remarks" class="form-control driverForm__control" rows="4" placeholder="Remarks"></textarea>';
$out .= '                </div>';
$out .= '              </div>';
$out .= '            </div>';
$out .= '          </div>';

$out .= '          <input type="hidden" name="vehicle_id" value="' . (int)$vehicleId . '">';
$out .= '          <input type="hidden" name="car_code" value="' . htmlspecialchars($carCode, ENT_QUOTES, 'UTF-8') . '">';
$out .= '          <input type="hidden" name="pickup_datetime" value="' . htmlspecialchars($pickupDateTime, ENT_QUOTES, 'UTF-8') . '">';
$out .= '          <input type="hidden" name="dropoff_datetime" value="' . htmlspecialchars($dropoffDateTime, ENT_QUOTES, 'UTF-8') . '">';
$out .= '          <input type="hidden" name="pickup_location" value="' . htmlspecialchars($pickupLocation, ENT_QUOTES, 'UTF-8') . '">';
$out .= '          <input type="hidden" name="dropoff_location" value="' . htmlspecialchars($dropoffLocation, ENT_QUOTES, 'UTF-8') . '">';
$out .= '          <input type="hidden" name="days" value="' . (int)$days . '">';
$out .= '          <input type="hidden" name="coverage_id" value="' . htmlspecialchars($coverageId, ENT_QUOTES, 'UTF-8') . '">';
$out .= '          <input type="hidden" name="coverage_db_id" value="' . (int)$coverageDbId . '">';
$out .= '          <input type="hidden" name="coverage_name" value="' . htmlspecialchars($coverageName, ENT_QUOTES, 'UTF-8') . '">';
$out .= '          <input type="hidden" name="coverage_day_price" value="' . number_format($coverageDayPrice, 2, '.', '') . '">';
$out .= '          <input type="hidden" name="coverage_total" value="' . number_format($coverageTotal, 2, '.', '') . '">';
$out .= '          <input type="hidden" name="rental_amount" value="' . number_format($rentalAmount, 2, '.', '') . '">';
$out .= '          <input type="hidden" name="security_deposit" value="' . number_format($securityDeposit, 2, '.', '') . '">';
$out .= '          <input type="hidden" name="extras_total" value="' . number_format($extrasTotal, 2, '.', '') . '">';
$out .= '          <input type="hidden" name="grand_total" value="' . number_format($totalForTrip, 2, '.', '') . '">';
$out .= '          <input type="hidden" name="extras" value="' . htmlspecialchars(json_encode($selectedExtras), ENT_QUOTES, 'UTF-8') . '">';

$out .= '              <hr>';


$out .= '          <div class="driverFormSection mt-4">';
$out .= '            <h3 class="driverFormSection__title">Payment option</h3>';
$out .= '            <div class="row">';
$out .= '              <div class="col-md-6 mb-3">';
$out .= '                <label class="driverForm__label">How would you like to pay?</label>';
$out .= '                <select name="payment_option" id="payment_option" class="form-control driverForm__control" required>';
$out .= '                  <option value="">Select payment option</option>';
$out .= '                  <option value="pay_now">Pay now</option>';
$out .= '                  <option value="pay_on_arrival">Pay on arrival</option>';
$out .= '                </select>';
$out .= '              </div>';
$out .= '            </div>';
$out .= '          </div>';

$out .= '          <div class="mt-4 d-flex justify-content-end">';
$out .= '            <button type="submit" id="bookingSubmitBtn" class="btn btn-primary bookingSubmitBtn">Continue to Payment</button>';
$out .= '          </div>';

$out .= '        </form>';
$out .= '      </div>';
$out .= '    </div>';

$out .= '    <div class="col-lg-4">';
$out .= '      <aside class="driverSummaryCard">';
$out .= '        <div class="driverSummaryCard__vehicle mb-4">';
$out .= '          <div class="driverSummaryCard__dates">';
$out .=                htmlspecialchars(($pickupText ? $pickupText : $pickupDate) . ($dropoffText ? ' - ' . $dropoffText : ''));
$out .= '          </div>';
$out .= '          <div class="driverSummaryCard__car d-flex align-items-center justify-content-between">';
$out .= '            <div>';
$out .= '              <h4 class="driverSummaryCard__carTitle mb-1">' . htmlspecialchars($row['car_model']) . '</h4>';
$out .= '              <div class="text-muted">or similar ' . htmlspecialchars($row['car_category']) . '</div>';
$out .= '            </div>';
$out .= '            <img src="' . htmlspecialchars($row['image']) . '" alt="' . htmlspecialchars($row['car_model']) . '" class="driverSummaryCard__image">';
$out .= '          </div>';
$out .= '        </div>';

$out .= '        <div class="driverSummaryCard__block mb-3">';
$out .= '          <h5 class="driverSummaryCard__blockTitle">Trip details</h5>';
$out .= '          <div class="driverSummaryRow"><span>Pick-up</span><strong>' . htmlspecialchars($pickupLocation !== '' ? $pickupLocation : '-') . '</strong></div>';
$out .= '          <div class="driverSummaryRow"><span>Drop-off</span><strong>' . htmlspecialchars($dropoffLocation !== '' ? $dropoffLocation : '-') . '</strong></div>';
$out .= '          <div class="driverSummaryRow"><span>Rental period</span><strong>' . (int)$days . ' ' . ($days === 1 ? 'day' : 'days') . '</strong></div>';
$out .= '          <div class="driverSummaryRow"><span>Coverage</span><strong>' . htmlspecialchars($coverageName !== '' ? $coverageName : 'No coverage') . '</strong></div>';
$out .= '        </div>';

if (!empty($selectedExtras)) {
    $out .= '        <div class="driverSummaryCard__block mb-3">';
    $out .= '          <h5 class="driverSummaryCard__blockTitle">Selected extras</h5>';
    foreach ($selectedExtras as $extra) {
        $extraName  = htmlspecialchars($extra['name'] ?? '', ENT_QUOTES, 'UTF-8');
        $extraQty   = (int)($extra['qty'] ?? 1);
        $extraValue = isset($extra['total']) ? (float)$extra['total'] : 0;
        $out .= '    <div class="driverSummaryRow"><span>' . $extraName . ' × ' . $extraQty . '</span><strong>€' . number_format($extraValue, 2, '.', '') . '</strong></div>';
    }
    $out .= '        </div>';
}

$out .= '        <div class="driverSummaryCard__block mb-3">';
$out .= '          <h5 class="driverSummaryCard__blockTitle">Price summary</h5>';
$out .= '          <div class="driverSummaryRow"><span>Coverage price</span><strong>€ ' . number_format($coverageTotal, 2, '.', ',') . '</strong></div>';
$out .= '          <div class="driverSummaryRow"><span>Extras price</span><strong>€ ' . number_format($extrasTotal, 2, '.', ',') . '</strong></div>';
$out .= '          <div class="driverSummaryRow"><span>Rental amount</span><strong>€ ' . number_format($rentalAmount, 2, '.', ',') . '</strong></div>';
$out .= '          <div class="driverSummaryRow driverSummaryRow--total">';
$out .= '              <span>Total for ' . (int)$days . ' ' . ($days === 1 ? 'day' : 'days') . '</span>';
$out .= '              <strong class="driverSummaryTotalPrice">€ ' . number_format($totalForTrip, 2, '.', ',') . '</strong>';
$out .= '          </div>';
$out .= '          <div class="driverSummaryMuted">Security deposit: € ' . number_format($securityDeposit, 2, '.', ',') . ' (payable/refundable separately)</div>';
$out .= '        </div>';

$out .= '      </aside>';
$out .= '    </div>';

$out .= '  </div>';
$out .= '</div>';

$out .= '<script>
  document.addEventListener("DOMContentLoaded", function () {
      var needChauffeur = document.getElementById("need_chauffeur");
      var needSlLicense = document.getElementById("need_sl_license");
      var licenseSection = document.getElementById("licenseSection");
      var uploadSection = document.getElementById("uploadSection");
      var paymentOption = document.getElementById("payment_option");
      var bookingSubmitBtn = document.getElementById("bookingSubmitBtn");

      function toggleSections() {
          if (!needChauffeur || !licenseSection) return;

          if (needChauffeur.value === "no") {
              licenseSection.style.display = "block";
          } else {
              licenseSection.style.display = "none";
              if (needSlLicense) needSlLicense.value = "";
              if (uploadSection) uploadSection.style.display = "none";
          }
      }

      function toggleUploads() {
          if (!needSlLicense || !uploadSection) return;

          if (needSlLicense.value === "yes") {
              uploadSection.style.display = "block";
          } else {
              uploadSection.style.display = "none";
          }
      }

      function togglePaymentButton() {
          if (!paymentOption || !bookingSubmitBtn) return;

          if (paymentOption.value === "pay_on_arrival") {
              bookingSubmitBtn.textContent = "Make Reservation";
          } else {
              bookingSubmitBtn.textContent = "Continue to Payment";
          }
      }

      if (needChauffeur) {
          needChauffeur.addEventListener("change", toggleSections);
      }

      if (needSlLicense) {
          needSlLicense.addEventListener("change", toggleUploads);
      }

      if (paymentOption) {
          paymentOption.addEventListener("change", togglePaymentButton);
      }

      toggleSections();
      toggleUploads();
      togglePaymentButton();
  });
</script>';

return $out;
return;
