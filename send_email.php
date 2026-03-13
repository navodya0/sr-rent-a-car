<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data and sanitize inputs to prevent XSS attacks
    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Validate email
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Email settings
        $to = "wsrimal@gmail.com"; // Replace with your email address
        $headers = "From: $name <$email>" . "\r\n" . 
                   "Reply-To: $email" . "\r\n" . 
                   "Content-Type: text/html; charset=UTF-8";
        
        // Compose the email body
        $email_body = "
        <html>
        <head>
            <title>$subject</title>
        </head>
        <body>
            <h2>Contact Form Submission</h2>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Subject:</strong> $subject</p>
            <p><strong>Message:</strong></p>
            <p>$message</p>
        </body>
        </html>";

        // Send the email
        if (mail($to, $subject, $email_body, $headers)) {
            // Redirect or show a success message
            echo "Message sent successfully!";
        } else {
            echo "Failed to send the message.";
        }
    } else {
        // Handle invalid email
        echo "Invalid email address.";
    }
}
?>
