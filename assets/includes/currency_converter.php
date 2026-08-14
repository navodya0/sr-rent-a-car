<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/**
 * Currency Converter Utility
 * Detects user IP, determines currency, and fetches EUR exchange rate.
 * Caches results in $_SESSION to prevent rate limits.
 */

function getClientIp() {
    $ip = '';
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR'])[0];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'] ?? '';
    }
    
    // For local testing, we can simulate an Indian IP if the IP is localhost.
    if ($ip === '127.0.0.1' || $ip === '::1' || strpos($ip, '192.168.') === 0) {
        $ip = '49.36.216.59'; // Hardcoded India IP for testing
    }
    
    return trim($ip);
}

function initCurrencyConverter() {
    // If we already have the currency info cached and it's less than 24h old, return
    if (isset($_SESSION['currency_code']) && isset($_SESSION['exchange_rate']) && isset($_SESSION['currency_last_updated'])) {
        if (time() - $_SESSION['currency_last_updated'] < 86400) {
            return;
        }
    }

    $ip = getClientIp();
    $currencyCode = 'EUR'; // Default

    // 1. Get Currency Code from IP
    if ($ip) {
        $geoUrl = "http://ip-api.com/json/{$ip}?fields=status,country,currency";
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $geoUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 3);
        $geoJson = curl_exec($ch);
        curl_close($ch);

        if ($geoJson) {
            $geoData = json_decode($geoJson, true);
            if (isset($geoData['status']) && $geoData['status'] === 'success' && !empty($geoData['currency'])) {
                $currencyCode = strtoupper(trim($geoData['currency']));
            }
        }
    }

    // 2. Get Exchange Rate (EUR -> Target)
    $exchangeRate = 1.0;
    if ($currencyCode !== 'EUR') {
        $ratesUrl = "https://open.er-api.com/v6/latest/EUR";
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $ratesUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 3);
        $ratesJson = curl_exec($ch);
        curl_close($ch);

        if ($ratesJson) {
            $ratesData = json_decode($ratesJson, true);
            if (isset($ratesData['result']) && $ratesData['result'] === 'success') {
                if (isset($ratesData['rates'][$currencyCode])) {
                    $exchangeRate = (float)$ratesData['rates'][$currencyCode];
                } else {
                    // Fallback to EUR if currency not found in rates
                    $currencyCode = 'EUR';
                }
            }
        }
    }

    // Determine simple currency symbols for popular currencies
    $symbols = [
        'EUR' => '€',
        'USD' => '$',
        'GBP' => '£',
        'INR' => '₹',
        'AUD' => 'A$',
        'CAD' => 'C$',
        'SGD' => 'S$',
        'LKR' => 'Rs' // Default local
    ];
    $currencySymbol = $symbols[$currencyCode] ?? $currencyCode . ' ';

    // Cache to session
    $_SESSION['currency_code'] = $currencyCode;
    $_SESSION['currency_symbol'] = $currencySymbol;
    $_SESSION['exchange_rate'] = $exchangeRate;
    $_SESSION['currency_last_updated'] = time();
}

// Initialize on include
initCurrencyConverter();

// Prepare a JS script string to inject globally
$currencyJsVariables = "<script>
    window.UserCurrency = {
        code: '" . addslashes($_SESSION['currency_code']) . "',
        symbol: '" . addslashes($_SESSION['currency_symbol']) . "',
        rate: " . (float)$_SESSION['exchange_rate'] . "
    };
</script>";
