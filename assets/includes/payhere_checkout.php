<?php
require_once __DIR__ . '/db_connect.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    exit('Invalid request');
}

$merchant_id     = '1234721';
$merchant_secret = trim('MjY3MDY2NDYwNjI2MTEyMjE4NDAxMzA1MDk2NTU1MzIzMTM2NzI5OQ==');
$currency        = 'EUR';
$payhere_url     = 'https://sandbox.payhere.lk/pay/checkout';
$base_url        = 'https://derogatory-keely-displeasureably.ngrok-free.dev/srilankarentacar.com';

$full_name   = trim($_POST['full_name'] ?? '');
$email       = trim($_POST['email'] ?? '');
$phone_code  = trim($_POST['whatsapp_country_code'] ?? '');
$phone_no    = trim($_POST['whatsapp_number'] ?? '');
$country     = trim($_POST['country_of_residence'] ?? '');
$amount      = (float)($_POST['grand_total'] ?? 0);
$car_code    = trim($_POST['car_code'] ?? '');
$vehicle_id  = (int)($_POST['vehicle_id'] ?? 0);
$remarks     = trim($_POST['remarks'] ?? '');

if ($full_name === '' || $email === '' || $amount <= 0) {
    exit('Missing required payment data');
}

$name_parts = preg_split('/\s+/', $full_name);
$first_name = $name_parts[0] ?? '';
$last_name  = count($name_parts) > 1 ? implode(' ', array_slice($name_parts, 1)) : '-';

$phone = trim($phone_code . $phone_no);
$order_id = 'EVR-' . date('YmdHis') . '-' . mt_rand(1000, 9999);

$sql = "INSERT INTO booking_reservations (
            id,
            vehicle_id,
            car_code,
            full_name,
            email,
            whatsapp_number,
            country_of_residence,
            grand_total,
            payment_option,
            payment_status,
            remarks,
            created_at
        ) VALUES (
            :id,
            :vehicle_id,
            :car_code,
            :full_name,
            :email,
            :whatsapp_number,
            :country_of_residence,
            :grand_total,
            :payment_option,
            :payment_status,
            :remarks,
            NOW()
        )";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    ':id'                   => $order_id,
    ':vehicle_id'           => $vehicle_id,
    ':car_code'             => $car_code,
    ':full_name'            => $full_name,
    ':email'                => $email,
    ':whatsapp_number'      => $phone,
    ':country_of_residence' => $country,
    ':grand_total'          => number_format($amount, 2, '.', ''),
    ':payment_option'       => 'pay_now',
    ':payment_status'       => 'pending',
    ':remarks'              => $remarks,
]);

$formatted_amount = number_format($amount, 2, '.', '');

$hash = strtoupper(
    md5(
        trim($merchant_id) .
        trim($order_id) .
        trim($formatted_amount) .
        trim($currency) .
        strtoupper(md5($merchant_secret))
    )
);

$return_url = $base_url . '/payment-success.php?id=' . urlencode($order_id);
$cancel_url = $base_url . '/payment-cancel.php?id=' . urlencode($order_id);
$notify_url = $base_url . '/assets/includes/payhere_notify.php';


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Redirecting to PayHere...</title>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($payhere_url, ENT_QUOTES, 'UTF-8'); ?>" id="payhere_form">
    <input type="hidden" name="merchant_id" value="<?php echo htmlspecialchars($merchant_id, ENT_QUOTES, 'UTF-8'); ?>">
    <input type="hidden" name="return_url" value="<?php echo htmlspecialchars($return_url, ENT_QUOTES, 'UTF-8'); ?>">
    <input type="hidden" name="cancel_url" value="<?php echo htmlspecialchars($cancel_url, ENT_QUOTES, 'UTF-8'); ?>">
    <input type="hidden" name="notify_url" value="<?php echo htmlspecialchars($notify_url, ENT_QUOTES, 'UTF-8'); ?>">

    <input type="hidden" name="order_id" value="<?php echo htmlspecialchars($order_id, ENT_QUOTES, 'UTF-8'); ?>">
    <input type="hidden" name="items" value="<?php echo htmlspecialchars('Vehicle Reservation - ' . $car_code, ENT_QUOTES, 'UTF-8'); ?>">
    <input type="hidden" name="currency" value="<?php echo htmlspecialchars($currency, ENT_QUOTES, 'UTF-8'); ?>">
    <input type="hidden" name="amount" value="<?php echo htmlspecialchars($formatted_amount, ENT_QUOTES, 'UTF-8'); ?>">
    <input type="hidden" name="hash" value="<?php echo htmlspecialchars($hash, ENT_QUOTES, 'UTF-8'); ?>">

    <input type="hidden" name="first_name" value="<?php echo htmlspecialchars($first_name, ENT_QUOTES, 'UTF-8'); ?>">
    <input type="hidden" name="last_name" value="<?php echo htmlspecialchars($last_name, ENT_QUOTES, 'UTF-8'); ?>">
    <input type="hidden" name="email" value="<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>">
    <input type="hidden" name="phone" value="<?php echo htmlspecialchars($phone, ENT_QUOTES, 'UTF-8'); ?>">
    <input type="hidden" name="address" value="N/A">
    <input type="hidden" name="city" value="Colombo">
    <input type="hidden" name="country" value="<?php echo htmlspecialchars($country ?: 'Sri Lanka', ENT_QUOTES, 'UTF-8'); ?>">
</form>

<script>
document.getElementById('payhere_form').submit();
</script>
</body>
</html>