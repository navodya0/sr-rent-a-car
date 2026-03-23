<?php
require_once dirname(__DIR__, 2) . '/config.core.php';
require_once MODX_CORE_PATH . 'model/modx/modx.class.php';
require_once dirname(__DIR__, 2) . '/vendor/autoload.php';

$modx = new modX();
$modx->initialize('web');

require_once __DIR__ . '/db_connect.php';
require_once __DIR__ . '/generate-booking-pdf.php';

\Stripe\Stripe::setApiKey('sk_test_REPLACE');

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$sessionId = $_GET['session_id'] ?? '';

if (!$sessionId) {
    exit('No session ID');
}

/*
|--------------------------------------------------------------------------
| VERIFY PAYMENT WITH STRIPE
|--------------------------------------------------------------------------
*/

try {
    $checkoutSession = \Stripe\Checkout\Session::retrieve($sessionId);

    if ($checkoutSession->payment_status !== 'paid') {
        exit('Payment not completed');
    }

} catch (Exception $e) {
    exit('Stripe error: ' . $e->getMessage());
}

/*
|--------------------------------------------------------------------------
| GET SESSION DATA
|--------------------------------------------------------------------------
*/

$data = $_SESSION['booking_payment_payload'] ?? [];

if (empty($data)) {
    exit('Session data missing');
}

/*
|--------------------------------------------------------------------------
| SAVE TO DB
|--------------------------------------------------------------------------
*/

$sql = "INSERT INTO booking_reservations (
    vehicle_id, car_code, pickup_datetime, dropoff_datetime, pickup_location, dropoff_location, days,
    coverage_id, coverage_db_id, coverage_name, coverage_day_price, coverage_total,
    rental_amount, security_deposit, extras_total, grand_total,
    full_name, email, whatsapp_country_code, whatsapp_number, country_of_residence, passengers, flight_number,
    need_chauffeur, need_sl_license, payment_option,
    passport_image, idp_image, applicant_photo, remarks, extras_json,
    booking_status, payment_status
) VALUES (
    :vehicle_id, :car_code, :pickup_datetime, :dropoff_datetime, :pickup_location, :dropoff_location, :days,
    :coverage_id, :coverage_db_id, :coverage_name, :coverage_day_price, :coverage_total,
    :rental_amount, :security_deposit, :extras_total, :grand_total,
    :full_name, :email, :whatsapp_country_code, :whatsapp_number, :country_of_residence, :passengers, :flight_number,
    :need_chauffeur, :need_sl_license, :payment_option,
    :passport_image, :idp_image, :applicant_photo, :remarks, :extras_json,
    'confirmed', 'paid'
)";

$stmt = $modx->prepare($sql);

foreach ($data as $key => $value) {
    $stmt->bindValue(':' . $key, $value);
}

$stmt->execute();

$bookingId = (int)$modx->lastInsertId();

/*
|--------------------------------------------------------------------------
| GENERATE PDF
|--------------------------------------------------------------------------
*/

$pdfPath = generateBookingPdfFile(array_merge($data, [
    'booking_id' => $bookingId
]));

/*
|--------------------------------------------------------------------------
| UPDATE PDF
|--------------------------------------------------------------------------
*/

if ($pdfPath) {
    $update = $modx->prepare("
        UPDATE booking_reservations
        SET confirmation_pdf = :pdf
        WHERE id = :id
    ");
    $update->bindValue(':pdf', $pdfPath);
    $update->bindValue(':id', $bookingId);
    $update->execute();
}

/*
|--------------------------------------------------------------------------
| CLEAN SESSION
|--------------------------------------------------------------------------
*/

unset($_SESSION['booking_payment_payload']);

/*
|--------------------------------------------------------------------------
| SUCCESS OUTPUT
|--------------------------------------------------------------------------
*/

echo "<h2>Payment Successful 🎉</h2>";
echo "<p>Booking ID: {$bookingId}</p>";

if ($pdfPath) {
    echo "<a href='" . MODX_SITE_URL . $pdfPath . "' target='_blank'>Download PDF</a>";
}