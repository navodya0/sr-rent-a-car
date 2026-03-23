<?php
require_once dirname(__DIR__, 2) . '/config.core.php';
require_once MODX_CORE_PATH . 'model/modx/modx.class.php';

$modx = new modX();
$modx->initialize('web');

require_once __DIR__ . '/db_connect.php';
require_once __DIR__ . '/generate-booking-pdf.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function redirectTo($url) {
    header('Location: ' . $url);
    exit;
}

function makeCustomerFolderName($fullName, $whatsappNumber = '') {
    $fullName = trim((string)$fullName);
    $whatsappNumber = preg_replace('/\D+/', '', (string)$whatsappNumber);

    $safeName = preg_replace('/[^A-Za-z0-9]+/', '_', $fullName);
    $safeName = trim($safeName, '_');

    if ($safeName === '') {
        $safeName = 'customer';
    }

    if ($whatsappNumber !== '') {
        return $safeName . '_' . $whatsappNumber;
    }

    return $safeName . '_' . time();
}

function uploadBookingFile($fieldName, $customerFolder, $subFolder, $prefix = 'file') {
    if (
        !isset($_FILES[$fieldName]) ||
        !is_array($_FILES[$fieldName]) ||
        (int)$_FILES[$fieldName]['error'] !== UPLOAD_ERR_OK
    ) {
        return null;
    }

    $tmpName  = $_FILES[$fieldName]['tmp_name'];
    $origName = $_FILES[$fieldName]['name'] ?? '';
    $ext      = strtolower(pathinfo($origName, PATHINFO_EXTENSION));

    $allowed = ['jpg', 'jpeg', 'png', 'webp', 'pdf'];
    if (!in_array($ext, $allowed, true)) {
        return null;
    }

    $customerFolder = trim((string)$customerFolder);
    $subFolder = trim((string)$subFolder);

    $baseUploadDir = dirname(__DIR__, 2) . '/uploads/';
    $targetDir = $baseUploadDir . $customerFolder . '/' . $subFolder . '/';

    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0775, true);
    }

    $originalBaseName = pathinfo($origName, PATHINFO_FILENAME);
    $originalBaseName = preg_replace('/[^A-Za-z0-9\-_]+/', '_', $originalBaseName);
    $originalBaseName = trim($originalBaseName, '_');

    if ($originalBaseName === '') {
        $originalBaseName = $prefix;
    }

    $safeName = $originalBaseName . '_' . date('Ymd_His') . '_' . bin2hex(random_bytes(4)) . '.' . $ext;
    $destPath = $targetDir . $safeName;

    if (!move_uploaded_file($tmpName, $destPath)) {
        return null;
    }

    return 'uploads/' . $customerFolder . '/' . $subFolder . '/' . $safeName;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    redirectTo(MODX_SITE_URL);
}

/*
|--------------------------------------------------------------------------
| MODX page IDs
|--------------------------------------------------------------------------
*/
$driverDetailsPageId = 44; 
$paymentPageId       = 45; 
$successPageId       = 44;

$vehicleId           = (int)($_POST['vehicle_id'] ?? 0);
$carCode             = trim($_POST['car_code'] ?? '');
$pickupDateTime      = trim($_POST['pickup_datetime'] ?? '');
$dropoffDateTime     = trim($_POST['dropoff_datetime'] ?? '');
$pickupLocation      = trim($_POST['pickup_location'] ?? '');
$dropoffLocation     = trim($_POST['dropoff_location'] ?? '');
$days                = (int)($_POST['days'] ?? 0);

$coverageId          = trim($_POST['coverage_id'] ?? '');
$coverageDbId        = (int)($_POST['coverage_db_id'] ?? 0);
$coverageName        = trim($_POST['coverage_name'] ?? '');
$coverageDayPrice    = (float)($_POST['coverage_day_price'] ?? 0);
$coverageTotal       = (float)($_POST['coverage_total'] ?? 0);

$rentalAmount        = (float)($_POST['rental_amount'] ?? 0);
$securityDeposit     = (float)($_POST['security_deposit'] ?? 0);
$extrasTotal         = (float)($_POST['extras_total'] ?? 0);
$grandTotal          = (float)($_POST['grand_total'] ?? 0);

$discountRaw            = trim($_POST['discount_raw'] ?? '');
$discountPercent        = (int)($_POST['discount_percent'] ?? 0);
$originalRentalAmount   = (float)($_POST['original_rental_amount'] ?? 0);
$discountedRentalAmount = (float)($_POST['rental_amount'] ?? 0);

$fullName            = trim($_POST['full_name'] ?? '');
$email               = trim($_POST['email'] ?? '');
$whatsappCountryCode = trim($_POST['whatsapp_country_code'] ?? '');
$whatsappNumber      = trim($_POST['whatsapp_number'] ?? '');
$countryOfResidence  = trim($_POST['country_of_residence'] ?? '');
$passengers          = (int)($_POST['passengers'] ?? 0);
$flightNumber        = trim($_POST['flight_number'] ?? '');

$needChauffeur       = trim($_POST['need_chauffeur'] ?? '');
$needSlLicense       = trim($_POST['need_sl_license'] ?? '');
$chauffeurFee        = (float)($_POST['chauffeur_fee'] ?? 0);
$licenseFee          = (float)($_POST['license_fee'] ?? 0);
$paymentOption       = trim($_POST['payment_option'] ?? '');
$remarks             = trim($_POST['remarks'] ?? '');
$extrasJson          = trim($_POST['extras'] ?? '');

$errors = [];

if ($vehicleId <= 0 && $carCode === '') $errors[] = 'Vehicle not selected.';
if ($fullName === '') $errors[] = 'Full name is required.';
if ($email === '') $errors[] = 'Email is required.';
if ($whatsappCountryCode === '' || $whatsappNumber === '') $errors[] = 'Whatsapp number is required.';
if ($countryOfResidence === '') $errors[] = 'Country of residence is required.';
if ($passengers <= 0) $errors[] = 'Passenger count is required.';
if (!in_array($needChauffeur, ['yes', 'no'], true)) $errors[] = 'Please select chauffeur option.';
if (!in_array($paymentOption, ['pay_now', 'pay_on_arrival'], true)) $errors[] = 'Please select payment option.';

if ($needChauffeur !== 'yes') {
    $chauffeurFee = 0;
} else {
    $chauffeurFee = 50.00 * max(1, $days);
}

if ($needSlLicense !== 'yes') {
    $licenseFee = 0;
} else {
    $licenseFee = 50.00;
}

$customerFolder = makeCustomerFolderName($fullName, $whatsappNumber);

$passportImage  = uploadBookingFile('passport_image', $customerFolder, 'passport_copy', 'passport');
$idpImage       = uploadBookingFile('idp_image', $customerFolder, 'idp_copy', 'idp');
$applicantPhoto = uploadBookingFile('applicant_photo', $customerFolder, 'applicant_photo', 'applicant');

if (!empty($errors)) {
    $_SESSION['booking_submit_errors'] = $errors;
    $_SESSION['booking_submit_old'] = $_POST;
    redirectTo($_SERVER['HTTP_REFERER'] ?? $modx->makeUrl($driverDetailsPageId, '', '', 'full'));
}

/*
|--------------------------------------------------------------------------
| PAY ON ARRIVAL -> save directly in DB
|--------------------------------------------------------------------------
*/
if ($paymentOption === 'pay_on_arrival') {
    $sql = "INSERT INTO booking_reservations (
        vehicle_id, car_code, pickup_datetime, dropoff_datetime, pickup_location, dropoff_location, days,
        coverage_id, coverage_db_id, coverage_name, coverage_day_price, coverage_total,
        rental_amount, security_deposit, extras_total, grand_total,
        discount_raw, discount_percent, original_rental_amount, discounted_rental_amount,
        full_name, email, whatsapp_country_code, whatsapp_number, country_of_residence, passengers, flight_number,
        need_chauffeur, need_sl_license, payment_option,
        passport_image, idp_image, applicant_photo, remarks, extras_json,
        booking_status, payment_status, chauffeur_fee, license_fee
    ) VALUES (
        :vehicle_id, :car_code, :pickup_datetime, :dropoff_datetime, :pickup_location, :dropoff_location, :days,
        :coverage_id, :coverage_db_id, :coverage_name, :coverage_day_price, :coverage_total,
        :rental_amount, :security_deposit, :extras_total, :grand_total,
        :discount_raw, :discount_percent, :original_rental_amount, :discounted_rental_amount,
        :full_name, :email, :whatsapp_country_code, :whatsapp_number, :country_of_residence, :passengers, :flight_number,
        :need_chauffeur, :need_sl_license, :payment_option,
        :passport_image, :idp_image, :applicant_photo, :remarks, :extras_json,
        'reserved', 'pending', :chauffeur_fee, :license_fee
    )";

    $stmt = $modx->prepare($sql);

    if (!$stmt) {
        $_SESSION['booking_submit_errors'] = ['Could not prepare booking insert query.'];
        redirectTo($modx->makeUrl($driverDetailsPageId, '', '', 'full'));
    }

    $stmt->bindValue(':vehicle_id', $vehicleId, PDO::PARAM_INT);
    $stmt->bindValue(':car_code', $carCode, PDO::PARAM_STR);
    $stmt->bindValue(':pickup_datetime', $pickupDateTime, PDO::PARAM_STR);
    $stmt->bindValue(':dropoff_datetime', $dropoffDateTime, PDO::PARAM_STR);
    $stmt->bindValue(':pickup_location', $pickupLocation, PDO::PARAM_STR);
    $stmt->bindValue(':dropoff_location', $dropoffLocation, PDO::PARAM_STR);
    $stmt->bindValue(':days', $days, PDO::PARAM_INT);

    $stmt->bindValue(':coverage_id', $coverageId, PDO::PARAM_STR);
    $stmt->bindValue(':coverage_db_id', $coverageDbId, PDO::PARAM_INT);
    $stmt->bindValue(':coverage_name', $coverageName, PDO::PARAM_STR);
    $stmt->bindValue(':coverage_day_price', number_format($coverageDayPrice, 2, '.', ''), PDO::PARAM_STR);
    $stmt->bindValue(':coverage_total', number_format($coverageTotal, 2, '.', ''), PDO::PARAM_STR);

    $stmt->bindValue(':rental_amount', number_format($rentalAmount, 2, '.', ''), PDO::PARAM_STR);
    $stmt->bindValue(':security_deposit', number_format($securityDeposit, 2, '.', ''), PDO::PARAM_STR);
    $stmt->bindValue(':extras_total', number_format($extrasTotal, 2, '.', ''), PDO::PARAM_STR);
    $stmt->bindValue(':grand_total', number_format($grandTotal, 2, '.', ''), PDO::PARAM_STR);

    $stmt->bindValue(':discount_raw', $discountRaw, PDO::PARAM_STR);
    $stmt->bindValue(':discount_percent', $discountPercent, PDO::PARAM_INT);
    $stmt->bindValue(':original_rental_amount', number_format($originalRentalAmount, 2, '.', ''), PDO::PARAM_STR);
    $stmt->bindValue(':discounted_rental_amount', number_format($discountedRentalAmount, 2, '.', ''), PDO::PARAM_STR);

    $stmt->bindValue(':full_name', $fullName, PDO::PARAM_STR);
    $stmt->bindValue(':email', $email, PDO::PARAM_STR);
    $stmt->bindValue(':whatsapp_country_code', $whatsappCountryCode, PDO::PARAM_STR);
    $stmt->bindValue(':whatsapp_number', $whatsappNumber, PDO::PARAM_STR);
    $stmt->bindValue(':country_of_residence', $countryOfResidence, PDO::PARAM_STR);
    $stmt->bindValue(':passengers', $passengers, PDO::PARAM_INT);
    $stmt->bindValue(':flight_number', $flightNumber, PDO::PARAM_STR);

    $stmt->bindValue(':need_chauffeur', $needChauffeur, PDO::PARAM_STR);
    $stmt->bindValue(':need_sl_license', $needSlLicense !== '' ? $needSlLicense : null, PDO::PARAM_STR);
    $stmt->bindValue(':payment_option', $paymentOption, PDO::PARAM_STR);
    $stmt->bindValue(':chauffeur_fee', number_format($chauffeurFee, 2, '.', ''), PDO::PARAM_STR);
    $stmt->bindValue(':license_fee', number_format($licenseFee, 2, '.', ''), PDO::PARAM_STR);
    $stmt->bindValue(':passport_image', $passportImage, PDO::PARAM_STR);
    $stmt->bindValue(':idp_image', $idpImage, PDO::PARAM_STR);
    $stmt->bindValue(':applicant_photo', $applicantPhoto, PDO::PARAM_STR);
    $stmt->bindValue(':remarks', $remarks, PDO::PARAM_STR);
    $stmt->bindValue(':extras_json', $extrasJson, PDO::PARAM_STR);

    if (!$stmt->execute()) {
        $error = $stmt->errorInfo();
        $_SESSION['booking_submit_errors'] = [
            'Could not save booking: ' . ($error[2] ?? 'Unknown database error.')
        ];
        redirectTo($modx->makeUrl($driverDetailsPageId, '', '', 'full'));
    }

    $bookingId = (int)$modx->lastInsertId();

    $carModel = '';
    $vehicleStmt = $modx->prepare("SELECT car_model FROM vehicles WHERE id = :vehicle_id LIMIT 1");
    if ($vehicleStmt) {
        $vehicleStmt->bindValue(':vehicle_id', $vehicleId, PDO::PARAM_INT);
        if ($vehicleStmt->execute()) {
            $vehicleRow = $vehicleStmt->fetch(PDO::FETCH_ASSOC);
            $carModel = trim((string)($vehicleRow['car_model'] ?? ''));
        }
    }

    // $pdfPath = generateBookingPdfFile([
    //     'booking_id'               => $bookingId,
    //     'car_model'                => $carModel,
    //     'car_code'                 => $carCode,
    //     'pickup_datetime'          => $pickupDateTime,
    //     'dropoff_datetime'         => $dropoffDateTime,
    //     'pickup_location'          => $pickupLocation,
    //     'dropoff_location'         => $dropoffLocation,
    //     'days'                     => $days,
    //     'coverage_name'            => $coverageName,
    //     'coverage_total'           => $coverageTotal,
    //     'rental_amount'            => $rentalAmount,
    //     'extras_total'             => $extrasTotal,
    //     'grand_total'              => $grandTotal,
    //     'security_deposit'         => $securityDeposit,
    //     'full_name'                => $fullName,
    //     'email'                    => $email,
    //     'whatsapp_country_code'    => $whatsappCountryCode,
    //     'whatsapp_number'          => $whatsappNumber,
    //     'country_of_residence'     => $countryOfResidence,
    //     'passengers'               => $passengers,
    //     'flight_number'            => $flightNumber,
    //     'need_chauffeur'           => $needChauffeur,
    //     'need_sl_license'          => $needSlLicense,
    //     'chauffeur_fee'            => $chauffeurFee,
    //     'license_fee'              => $licenseFee,
    //     'payment_option'           => $paymentOption,
    //     'remarks'                  => $remarks,
    //     'extras_json'              => $extrasJson,
    //     'discount_raw'             => $discountRaw,
    //     'discount_percent'         => $discountPercent,
    //     'original_rental_amount'   => $originalRentalAmount,
    //     'discounted_rental_amount' => $discountedRentalAmount,
    // ]);

    // if ($pdfPath) {
    //     $updatePdfStmt = $modx->prepare("
    //         UPDATE booking_reservations
    //         SET confirmation_pdf = :confirmation_pdf
    //         WHERE id = :id
    //         LIMIT 1
    //     ");
    //     if ($updatePdfStmt) {
    //         $updatePdfStmt->bindValue(':confirmation_pdf', $pdfPath, PDO::PARAM_STR);
    //         $updatePdfStmt->bindValue(':id', $bookingId, PDO::PARAM_INT);
    //         $updatePdfStmt->execute();
    //     }
    // }

    // $_SESSION['booking_success'] = [
    //     'booking_id' => $bookingId,
    //     'pdf_url'    => $pdfPath ? MODX_SITE_URL . ltrim($pdfPath, '/') : ''
    // ];

    // $driverDetailsPageId = 44;
    // redirectTo($modx->makeUrl($driverDetailsPageId, '', '', 'full'));

    $_SESSION['booking_success'] = [
        'booking_id' => $bookingId
    ];

    redirectTo($modx->makeUrl($successPageId, '', '', 'full'));
}

/*
|--------------------------------------------------------------------------
| PAY NOW -> store everything in session and redirect to payment page
|--------------------------------------------------------------------------
*/
$_SESSION['booking_payment_payload'] = [
    'vehicle_id'               => $vehicleId,
    'car_code'                 => $carCode,
    'pickup_datetime'          => $pickupDateTime,
    'dropoff_datetime'         => $dropoffDateTime,
    'pickup_location'          => $pickupLocation,
    'dropoff_location'         => $dropoffLocation,
    'days'                     => $days,
    'coverage_id'              => $coverageId,
    'coverage_db_id'           => $coverageDbId,
    'coverage_name'            => $coverageName,
    'coverage_day_price'       => $coverageDayPrice,
    'coverage_total'           => $coverageTotal,
    'rental_amount'            => $rentalAmount,
    'security_deposit'         => $securityDeposit,
    'extras_total'             => $extrasTotal,
    'grand_total'              => $grandTotal,
    'full_name'                => $fullName,
    'email'                    => $email,
    'whatsapp_country_code'    => $whatsappCountryCode,
    'whatsapp_number'          => $whatsappNumber,
    'country_of_residence'     => $countryOfResidence,
    'passengers'               => $passengers,
    'flight_number'            => $flightNumber,
    'need_chauffeur'           => $needChauffeur,
    'need_sl_license'          => $needSlLicense,
    'chauffeur_fee'            => $chauffeurFee,
    'license_fee'              => $licenseFee,
    'passport_image'           => $passportImage,
    'idp_image'                => $idpImage,
    'applicant_photo'          => $applicantPhoto,
    'remarks'                  => $remarks,
    'extras_json'              => $extrasJson,
    'payment_option'           => $paymentOption,
    'discount_raw'             => $discountRaw,
    'discount_percent'         => $discountPercent,
    'original_rental_amount'   => $originalRentalAmount,
    'discounted_rental_amount' => $discountedRentalAmount,
];

redirectTo($modx->makeUrl($paymentPageId, '', '', 'full'));