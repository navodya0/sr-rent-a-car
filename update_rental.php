<?php
include('conn.php');

$id = $_POST['edit-id'];
$car_code = $_POST['edit-car_code'];
$car_model = $_POST['edit-car_model'];
$car_category = $_POST['edit-car_category'];
$duration = $_POST['edit-duration'];
$rate = $_POST['edit-rate'];
$start_date = $_POST['edit-start_date'];
$end_date = $_POST['edit-end_date'];

// Update query
$sql = "UPDATE car_rental SET car_code='$car_code', car_model='$car_model', car_category='$car_category', 
        duration='$duration', rate='$rate', start_date='$start_date', end_date='$end_date' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo json_encode(['status' => 'success']);
} else {
    echo json_encode(['status' => 'error', 'message' => $conn->error]);
}

$conn->close();
?>
