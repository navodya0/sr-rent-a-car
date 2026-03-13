<?php
// Database connection
$host = 'localhost';
$db = 'slrcar_sr';
$user = 'slrcar_srimal87';
$pass = 'Srimal@456';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

// Fetch data
$stmt = $pdo->query("SELECT duration, rate FROM rates ORDER BY id ASC");
$data = $stmt->fetchAll();

header('Content-Type: application/json');
echo json_encode($data);
?>
