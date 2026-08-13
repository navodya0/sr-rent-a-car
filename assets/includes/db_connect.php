<?php
$host = "localhost";
$db_name = "rentacar";
$username = "root";
$password = "";
$port = 3307;
$charset = "utf8mb4";

$dsn = "mysql:host={$host};port={$port};dbname={$db_name};charset={$charset}";

$pdo = new PDO($dsn, $username, $password, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
]);