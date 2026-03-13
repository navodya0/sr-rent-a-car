<?php
include('conn.php');

$id = $_GET['id'];

$sql = "SELECT * FROM car_rental WHERE id = '$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo json_encode($result->fetch_assoc());
} else {
    echo json_encode(['status' => 'error', 'message' => 'Rental not found']);
}

$conn->close();
?>
