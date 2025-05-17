<?php
date_default_timezone_set('Asia/Kolkata'); // Set your desired timezone

// Check if form is submitted via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize inputs
    $name = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $subject = htmlspecialchars(trim($_POST['subject'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    // Validate all required fields
    if ($name && $email && $subject && $message) {
        $timestamp = date("Y-m-d H:i:s");
        $entry = "-----\nDate: $timestamp\nName: $name\nEmail: $email\nSubject: $subject\nMessage: $message\n-----\n";

        $filePath = __DIR__ . '/contact.txt';

        if (file_put_contents($filePath, $entry, FILE_APPEND | LOCK_EX)) {
            header("Location: /submitted.php");
            exit;
        } else {
            echo "Error saving your message. Please try again later.";
        }
    } else {
        echo "All fields are required.";
    }
} else {
    echo "Invalid request.";
}
?>