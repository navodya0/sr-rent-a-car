<?php
require_once MODX_BASE_PATH . 'assets/includes/db_connect.php';

/*
|--------------------------------------------------------------------------
| Read PayHere callback
|--------------------------------------------------------------------------
*/
$merchant_id      = $_POST['merchant_id'] ?? '';
$id         = $_POST['id'] ?? '';
$payment_id       = $_POST['payment_id'] ?? '';
$payhere_amount   = $_POST['payhere_amount'] ?? '';
$payhere_currency = $_POST['payhere_currency'] ?? '';
$status_code      = $_POST['status_code'] ?? '';
$md5sig           = $_POST['md5sig'] ?? '';
$status_message   = $_POST['status_message'] ?? '';
$method           = $_POST['method'] ?? '';

$merchant_secret = 'YOUR_SANDBOX_MERCHANT_SECRET';

/*
|--------------------------------------------------------------------------
| Verify signature
|--------------------------------------------------------------------------
*/
$local_md5sig = strtoupper(
    md5(
        $merchant_id .
        $id .
        $payhere_amount .
        $payhere_currency .
        $status_code .
        strtoupper(md5($merchant_secret))
    )
);

if ($local_md5sig === $md5sig && $status_code == '2') {
    $sql = "UPDATE bookings
            SET payment_status = 'paid',
                payment_id = :payment_id,
                payment_method = :payment_method,
                payhere_amount = :payhere_amount,
                payhere_currency = :payhere_currency,
                payment_message = :payment_message,
                paid_at = NOW()
            WHERE id = :id";

    $stmt = $modx->prepare($sql);
    $stmt->execute([
        ':payment_id'       => $payment_id,
        ':payment_method'   => $method,
        ':payhere_amount'   => $payhere_amount,
        ':payhere_currency' => $payhere_currency,
        ':payment_message'  => $status_message,
        ':id'         => $id,
    ]);
} else {
    $sql = "UPDATE bookings
            SET payment_status = 'failed',
                payment_message = :payment_message
            WHERE id = :id";

    $stmt = $modx->prepare($sql);
    $stmt->execute([
        ':payment_message' => $status_message,
        ':id'        => $id,
    ]);
}

http_response_code(200);
echo 'OK';