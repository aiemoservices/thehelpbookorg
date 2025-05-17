<?php
date_default_timezone_set('Asia/Kolkata'); // Set timezone

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and collect data
    $fullName = htmlspecialchars(trim($_POST['fullName'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $phone = htmlspecialchars(trim($_POST['phone'] ?? ''));
    $city = htmlspecialchars(trim($_POST['city'] ?? ''));
    $helpCategory = htmlspecialchars(trim($_POST['helpCategory'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    $donorType = htmlspecialchars(trim($_POST['donorType'] ?? ''));
    $donorDetails = htmlspecialchars(trim($_POST['donorDetails'] ?? ''));
    $needyType = htmlspecialchars(trim($_POST['needyType'] ?? ''));
    $needyDetails = htmlspecialchars(trim($_POST['needyDetails'] ?? ''));

    if ($fullName && $email && $phone && $city && $helpCategory && $message) {
        $timestamp = date("Y-m-d H:i:s");

        $entry = "-----\nDate: $timestamp\nName: $fullName\nEmail: $email\nPhone: $phone\nCity: $city\nHelp Category: $helpCategory\n";

        if ($helpCategory === 'donor') {
            $entry .= "Donor Type: $donorType\nDonor Details: $donorDetails\n";
        } elseif ($helpCategory === 'needy') {
            $entry .= "Needy Type: $needyType\nNeedy Details: $needyDetails\n";
        }

        $entry .= "Message: $message\n-----\n";

        $filePath = __DIR__ . '/help.txt';

        if (file_put_contents($filePath, $entry, FILE_APPEND | LOCK_EX)) {
            header("Location: /submitted.php");
            exit;
        } else {
            echo "Error saving your submission. Please try again later.";
        }
    } else {
        echo "Please fill in all required fields.";
    }
} else {
    echo "Invalid request.";
}
?>