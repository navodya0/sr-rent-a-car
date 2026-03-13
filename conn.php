<?php
$conn = mysqli_connect("localhost", "root", "", "rentacar");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
