<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer library using Composer's autoloader
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';
require 'vendor/phpmailer/phpmailer/src/Exception.php';


// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validate required fields
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        echo "All fields are required.";
        exit;
    }

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address.";
        exit;
    }

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.hostinger.com'; // Replace with your SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'info@thehelpbook.org';
        $mail->Password = 'Helpkaregaindia@2024';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Email sender and recipient
        $mail->setFrom('info@thehelpbook.org', 'The Helpbook Foundation'); // Replace 'Your Name' with your name
        $mail->addAddress('verma99776264@outlook.com');      // Recipient email

        // Email subject and body
        $mail->Subject = "Contact Form Submission: " . $subject;
        $mail->Body = "You have received a new message from your website contact form:\n\n"
                    . "Name: $name\n"
                    . "Email: $email\n"
                    . "Message:\n$message\n";

        // Send the email
        if ($mail->send()) {
            echo "Your message has been sent successfully!";
        } else {
            echo "There was a problem sending your message.";
        }
    } catch (Exception $e) {
        echo "Message could not be sent. Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Invalid request method.";
}
?>
