<?php
include('conn.php');

$id = $_GET['id'];

// Delete query
$sql = "DELETE FROM car_rental WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo json_encode(['status' => 'success']);
} else {
    echo json_encode(['status' => 'error', 'message' => $conn->error]);
}

$conn->close();
?>
