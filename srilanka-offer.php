<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

/*
|--------------------------------------------------------------------------
| Get real visitor IP
|--------------------------------------------------------------------------
*/
function getVisitorIp()
{
    if (!empty($_SERVER['HTTP_CF_CONNECTING_IP'])) {
        return trim($_SERVER['HTTP_CF_CONNECTING_IP']);
    }

    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ips = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        return trim($ips[0]);
    }

    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return trim($_SERVER['HTTP_CLIENT_IP']);
    }

    return trim($_SERVER['REMOTE_ADDR'] ?? '');
}

/*
|--------------------------------------------------------------------------
| Detect country from IP
|--------------------------------------------------------------------------
*/
function getCountryByIp($ip)
{
    if ($ip === '') {
        return 'UNKNOWN';
    }

    $ch = curl_init("http://ip-api.com/json/" . urlencode($ip) . "?fields=status,country,countryCode");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);

    $response = curl_exec($ch);

    if ($response === false) {
        curl_close($ch);
        return 'UNKNOWN';
    }

    curl_close($ch);

    $data = json_decode($response, true);

    if (!is_array($data) || ($data['status'] ?? '') !== 'success') {
        return 'UNKNOWN';
    }

    return $data['country'] . ' (' . $data['countryCode'] . ')';
}

/*
|--------------------------------------------------------------------------
| Run
|--------------------------------------------------------------------------
*/
$ip = getVisitorIp();
$country = getCountryByIp($ip);

/*
|--------------------------------------------------------------------------
| Output
|--------------------------------------------------------------------------
*/
echo "<pre>";
echo "IP: " . htmlspecialchars($ip) . "\n";
echo "Country: " . htmlspecialchars($country);
echo "</pre>";