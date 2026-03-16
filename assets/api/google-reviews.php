<?php
header('Content-Type: application/json');

$apiKey = 'AIzaSyAHmbwBrk0OKY0Nhp9FrR_zn8HKLGZ54OU';
$placeId = 'ChIJrYwNf9r54joRBWs4WE1YzCM';

$url = 'https://places.googleapis.com/v1/places/' . urlencode($placeId);

$headers = [
    'Content-Type: application/json',
    'X-Goog-Api-Key: ' . $apiKey,
    'X-Goog-FieldMask: displayName,rating,userRatingCount,reviews'
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$error = curl_error($ch);
curl_close($ch);

if ($error) {
    echo json_encode([
        'success' => false,
        'message' => 'cURL error',
        'error' => $error
    ]);
    exit;
}

$data = json_decode($response, true);

if ($httpCode !== 200) {
    echo json_encode([
        'success' => false,
        'message' => 'Google API request failed',
        'status_code' => $httpCode,
        'response' => $data
    ]);
    exit;
}

echo json_encode([
    'success' => true,
    'place' => $data
]);