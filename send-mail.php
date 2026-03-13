<?php

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    exit("error");
}

$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');

if (!$name || !$email || !$subject || !$message || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    exit("error");
}

require __DIR__ . '/phpmailer/src/Exception.php';
require __DIR__ . '/phpmailer/src/PHPMailer.php';
require __DIR__ . '/phpmailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'navodyadivyanjali2@gmail.com';
    $mail->Password   = 'hmdn xouu ecxf vait'; 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    $mail->setFrom($mail->Username, 'SR Rent A Car');
    $mail->addReplyTo($email, $name);
    $mail->addAddress('navodyadivyanjali2@gmail.com');

    $mail->Subject = "New Message: " . $subject;
    $mail->Body =
        "Name: $name\n" .
        "Email: $email\n" .
        "Subject: $subject\n\n" .
        "Message:\n$message";

    $mail->send();
    echo "success";

} catch (Exception $e) {
    echo "error";
}