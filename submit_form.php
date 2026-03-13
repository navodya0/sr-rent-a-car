<?php
// Database connection details
$servername = "localhost";
$username = "slrcar_srimal87";
$password = "Srimal@456";
$dbname = "slrcar_sr";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// SQL query to insert data into the database
$sql = "INSERT INTO contact_form (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "<span style='color: green;'>Message sent successfully. Our Agent Contact you Soon. Thank You ! </span>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
