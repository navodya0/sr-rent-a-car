<?php
// Database connection
$host = 'localhost';
$dbname = 'slrcar_sr';
$username = 'slrcar_srimal87';
$password = 'Srimal@456';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Query to get country codes
    $query = "SELECT country_name, country_code FROM country_codes";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($result);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
