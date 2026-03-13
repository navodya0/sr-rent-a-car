<?php
// Include DB connection
include 'db_connection.php';

// Set Sri Lanka Timezone
date_default_timezone_set('Asia/Colombo');

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    

    // Get POST data safely
    $employee_name = mysqli_real_escape_string($conn, $_POST['employee_name']);
    $station = mysqli_real_escape_string($conn, $_POST['station']);
    $booking_number = mysqli_real_escape_string($conn, $_POST['booking_number']);
    $greeting = intval($_POST['greeting']);
    $review_attempt = intval($_POST['review_attempt']);        // Save user's selection
    $vehicle_inspection = intval($_POST['vehicle_inspection']);
    $additional_charge = intval($_POST['additional_charge']);  // Save user's selection
    $friendly_goodbye = intval($_POST['friendly_goodbye']);
    $date_time = date("Y-m-d H:i:s"); // System time

    // Insert query
    $sql = "INSERT INTO departure_evaluation 
        (employee_name, station, booking_number, greeting, review_attempt, vehicle_inspection, additional_charge, friendly_goodbye, date_time)
        VALUES 
        ('$employee_name', '$station', '$booking_number', '$greeting', '$review_attempt', '$vehicle_inspection', '$additional_charge', '$friendly_goodbye', '$date_time')";

    // Execute
    if ($conn->query($sql) === TRUE) {
        echo "<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet'>
            <title>Success</title>
            <script>
                window.onload = function() {
                    alert('Record successfully saved!');
                    setTimeout(function() {
                        window.location.href = 'selection.php';
                    }, 500);
                }
            </script>
        </head>
        <body>
            <div class='container mt-5'>
                <div class='alert alert-success text-center' role='alert'>
                    ✅ Record successfully saved! Redirecting...
                </div>
            </div>
        </body>
        </html>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
    }

    $conn->close();
} else {
    // Redirect if accessed directly
    header('Location: selection.php');
    exit();
}
?>
