<?php
ini_set('display_errors', '0');
error_reporting(0);

require_once dirname(__DIR__, 2) . '/config.core.php';
require_once MODX_CORE_PATH . 'model/modx/modx.class.php';

$modx = new modX();
$modx->initialize('web');

require_once __DIR__ . '/db_connect.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['valid' => false, 'message' => 'Invalid request method.']);
    exit;
}

$input = json_decode(file_get_contents('php://input'), true);

$couponCode  = isset($input['coupon_code']) ? trim((string)$input['coupon_code']) : '';
$pickupDate  = isset($input['pickup_date']) ? trim((string)$input['pickup_date']) : '';
$dropoffDate = isset($input['dropoff_date']) ? trim((string)$input['dropoff_date']) : '';
$carCategory = isset($input['car_category']) ? trim((string)$input['car_category']) : '';

if ($couponCode === '') {
    echo json_encode(['valid' => false, 'message' => 'Please enter a coupon code.']);
    exit;
}

$couponEligibleCategories = ['semi executive', 'mini', 'standard','econ','executive', 'luxury' , 'mini suv' , 'large suv'];

if (!in_array(strtolower($carCategory), $couponEligibleCategories, true)) {
    echo json_encode([
        'valid' => false,
        'message' => 'Coupons are not applicable for this vehicle category.'
    ]);
    exit;
}

if ($pickupDate === '' || $dropoffDate === '') {
    echo json_encode(['valid' => false, 'message' => 'Booking dates are missing. Please go back and select your dates.']);
    exit;
}

$pickupTs  = strtotime($pickupDate);
$dropoffTs = strtotime($dropoffDate);

if (!$pickupTs || !$dropoffTs || $dropoffTs < $pickupTs) {
    echo json_encode(['valid' => false, 'message' => 'Invalid booking dates.']);
    exit;
}

$sql = "SELECT id, code, discount, valid_from, valid_until, is_active
        FROM coupons
        WHERE UPPER(code) = UPPER(:code)
        LIMIT 1";

$stmt = $modx->prepare($sql);
if (!$stmt) {
    echo json_encode(['valid' => false, 'message' => 'Could not validate coupon right now.']);
    exit;
}

$stmt->bindValue(':code', $couponCode, PDO::PARAM_STR);

if (!$stmt->execute()) {
    echo json_encode(['valid' => false, 'message' => 'Could not validate coupon right now.']);
    exit;
}

$coupon = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$coupon) {
    echo json_encode(['valid' => false, 'message' => 'This coupon code does not exist.']);
    exit;
}

if ((int)$coupon['is_active'] !== 1) {
    echo json_encode(['valid' => false, 'message' => 'This coupon is no longer active.']);
    exit;
}

$validFrom  = trim((string)($coupon['valid_from'] ?? ''));
$validUntil = trim((string)($coupon['valid_until'] ?? ''));

$validFromTs  = $validFrom !== '' ? strtotime($validFrom) : null;
$validUntilTs = $validUntil !== '' ? strtotime($validUntil) : null;

if ($validFromTs !== null && $pickupTs < $validFromTs) {
    echo json_encode([
        'valid' => false,
        'message' => 'This coupon is valid from ' . date('d M Y', $validFromTs) . '.'
    ]);
    exit;
}

if ($validUntilTs !== null && $dropoffTs > $validUntilTs) {
    echo json_encode([
        'valid' => false,
        'message' => 'This coupon expired on ' . date('d M Y', $validUntilTs) . '.'
    ]);
    exit;
}

$discountPercent = (float)($coupon['discount'] ?? 0);

if ($discountPercent <= 0) {
    echo json_encode(['valid' => false, 'message' => 'This coupon has no discount value.']);
    exit;
}

echo json_encode([
    'valid' => true,
    'coupon_id' => (int)$coupon['id'],
    'discount_percent' => $discountPercent,
    'message' => 'Coupon applied: ' . $discountPercent . '% off your rental.'
]);
exit;