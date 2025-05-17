<?php
date_default_timezone_set('Asia/Kolkata'); // Set timezone

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and collect form data
    $name = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $phone = htmlspecialchars(trim($_POST['phone'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));
    $role = htmlspecialchars(trim($_POST['role'] ?? ''));

    // Validate required fields
    if ($name && $email && $phone && $message && $role) {
        $timestamp = date("Y-m-d H:i:s");
        $entry = "-----\nDate: $timestamp\nName: $name\nEmail: $email\nPhone: $phone\nRole: $role\nMessage: $message\n-----\n";

        $filePath = __DIR__ . '/join.txt';

        if (file_put_contents($filePath, $entry, FILE_APPEND | LOCK_EX)) {
            header("Location: /submitted.php");
            exit;
        } else {
            echo "Error saving your application. Please try again later.";
        }
    } else {
        echo "All fields are required.";
    }
} else {
    echo "Invalid request.";
}
?>