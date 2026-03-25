<?php
    $merchant_id = '1234721';
    $merchant_secret = trim('MjcyODMzNzQwMjE0NTY5MjYyMDMzMTU1MTk1NzMyMzQ4MTc1OTUyMQ==');
    $currency = 'LKR';
    $amount = '100.00';
    $order_id = 'TEST-' . time();

    $base_url = 'https://airportparking.lk';

    $hash = strtoupper(
        md5(
            $merchant_id .
            $order_id .
            $amount .
            $currency .
            strtoupper(md5($merchant_secret))
        )
    );
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PayHere Minimal Test</title>
</head>
<body>
<form method="post" action="https://sandbox.payhere.lk/pay/checkout">
    <input type="hidden" name="merchant_id" value="<?php echo htmlspecialchars($merchant_id, ENT_QUOTES, 'UTF-8'); ?>">
    <input type="hidden" name="return_url" value="<?php echo htmlspecialchars($base_url . '/payment-success.php', ENT_QUOTES, 'UTF-8'); ?>">
    <input type="hidden" name="cancel_url" value="<?php echo htmlspecialchars($base_url . '/payment-cancel.php', ENT_QUOTES, 'UTF-8'); ?>">
    <input type="hidden" name="notify_url" value="<?php echo htmlspecialchars($base_url . '/assets/includes/payhere_notify.php', ENT_QUOTES, 'UTF-8'); ?>">

    <input type="hidden" name="order_id" value="<?php echo htmlspecialchars($order_id, ENT_QUOTES, 'UTF-8'); ?>">
    <input type="hidden" name="items" value="Sandbox Test Payment">
    <input type="hidden" name="currency" value="<?php echo htmlspecialchars($currency, ENT_QUOTES, 'UTF-8'); ?>">
    <input type="hidden" name="amount" value="<?php echo htmlspecialchars($amount, ENT_QUOTES, 'UTF-8'); ?>">
    <input type="hidden" name="hash" value="<?php echo htmlspecialchars($hash, ENT_QUOTES, 'UTF-8'); ?>">

    <input type="hidden" name="first_name" value="Test">
    <input type="hidden" name="last_name" value="User">
    <input type="hidden" name="email" value="test@example.com">
    <input type="hidden" name="phone" value="94770000000">
    <input type="hidden" name="address" value="Test Address">
    <input type="hidden" name="city" value="Colombo">
    <input type="hidden" name="country" value="Sri Lanka">

    <button type="submit">Test PayHere</button>
</form>
</body>
</html>