<?php
$logFile = __DIR__ . '/webxpay_debug.log';

function logMsg($msg) {
    global $logFile;
    file_put_contents($logFile, date('Y-m-d H:i:s') . " - " . $msg . PHP_EOL, FILE_APPEND);
}

logMsg("==== NEW WEBXPAY TEST ====");

$orderId = 'TEST' . time();
$amount  = '100'; // Try without decimals first

$secretKey = '8acbabba-570c-4d09-bdd2-8ba09a045789';

$webxpayUrl = 'https://stagingxpay.info/index.php?route=checkout/billing';

$publicKeyPath = __DIR__ . '/webxpay_public_key.pem';
$publicKey = file_get_contents($publicKeyPath);

if (!$publicKey) {
    logMsg("ERROR: Public key not found");
    die('Public key file not found');
}

logMsg("Order ID: " . $orderId);
logMsg("Amount: " . $amount);
logMsg("Public key preview: " . substr($publicKey, 0, 50));

$plaintext = $orderId . '|' . $amount;
logMsg("Plaintext: " . $plaintext);

$encrypted = '';

if (!openssl_public_encrypt($plaintext, $encrypted, $publicKey)) {
    $error = openssl_error_string();
    logMsg("ENCRYPTION FAILED: " . $error);
    die('Encryption failed: ' . $error);
}

$payment = base64_encode($encrypted);
$customFields = base64_encode($orderId);

logMsg("Encryption success");
logMsg("Encrypted length: " . strlen($encrypted));
logMsg("Payment length: " . strlen($payment));
logMsg("Payment preview: " . substr($payment, 0, 60));
logMsg("Secret key length: " . strlen($secretKey));
logMsg("Sending to: " . $webxpayUrl);
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Redirecting to WEBXPAY...</title>
</head>
<body>
    <p>Redirecting to WEBXPAY...</p>

    <form id="webxpayForm" method="post" action="<?php echo htmlspecialchars($webxpayUrl, ENT_QUOTES, 'UTF-8'); ?>">
        <input type="hidden" name="first_name" value="Test">
        <input type="hidden" name="last_name" value="Customer">
        <input type="hidden" name="email" value="test@example.com">
        <input type="hidden" name="contact_number" value="94771234567">

        <input type="hidden" name="address_line_one" value="Test Address">
        <input type="hidden" name="address_line_two" value="">
        <input type="hidden" name="city" value="Colombo">
        <input type="hidden" name="state" value="Western">
        <input type="hidden" name="postal_code" value="00100">
        <input type="hidden" name="country" value="Sri Lanka">

        <input type="hidden" name="process_currency" value="LKR">
        <input type="hidden" name="cms" value="PHP">

        <input type="hidden" name="secret_key" value="<?php echo htmlspecialchars($secretKey, ENT_QUOTES, 'UTF-8'); ?>">
        <input type="hidden" name="payment" value="<?php echo htmlspecialchars($payment, ENT_QUOTES, 'UTF-8'); ?>">
        <input type="hidden" name="custom_feilds" value="<?php echo htmlspecialchars($customFields, ENT_QUOTES, 'UTF-8'); ?>">
    </form>

    <script>
        document.getElementById('webxpayForm').submit();
    </script>
</body>
</html>