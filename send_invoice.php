<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';  // Ensure Composer's autoloader is included

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $invoiceUrl = $_POST['invoiceUrl']; 
    $email = $_POST['email'];  // Customer's email address

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Gmail SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'exploreholdingsit@gmail.com'; // Your Gmail address
        $mail->Password = 'Explore@#@371'; // Your Gmail app password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Use SMTPS encryption
        $mail->Port = 465; // Port for SMTPS

        // Recipients
        $mail->setFrom('it@explorevacations.lk', 'SR Rent A Car');
        $mail->addAddress($email);  // Customer email

        // Email content
        $mail->isHTML(true);
        $mail->Subject = 'Invoice from SR Rent A Car';
        $mail->Body    = 'Please find your invoice at the following link: <a href="' . $invoiceUrl . '">' . $invoiceUrl . '</a>';

        // Send the email
        $mail->send();
        echo 'Invoice sent successfully!';
    } catch (Exception $e) {
        echo "Error sending email: {$mail->ErrorInfo}";
    }
} else {
    echo "Invalid request.";
}
?>
