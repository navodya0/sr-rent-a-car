<?php
header('Content-Type: text/plain'); // Ensure a plain text response for AJAX

// Database connection settings
$host = 'localhost';
$db = 'slrcar_sr';
$user = 'slrcar_srimal87';
$pass = 'Srimal@456';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

        $stmt = $pdo->prepare("INSERT INTO subscribers (email) VALUES (:email)");
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        echo "Success";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
