<?php
header('Content-Type: application/json');

// Database connection
$conn = new mysqli("localhost", "slrcar_srimal87", "Srimal@689", "slrcar_sr");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT duration, rate FROM car_rental";
$result = $conn->query($sql);

$rates = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $rates[] = $row;
    }
}

echo json_encode($rates);

$conn->close();
?>
