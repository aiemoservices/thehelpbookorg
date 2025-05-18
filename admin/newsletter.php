<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

    if ($email) {
        // TODO: Save email to database or file, or trigger email logic.
        // Example (log to file):
        $timestamp = date("Y-m-d H:i:s");
        $entry = "-----\nDate: $timestamp\nEmail: $email\n-----\n";

        $filePath = __DIR__ . '/newsletter.txt';

        if (file_put_contents($filePath, $entry, FILE_APPEND | LOCK_EX)) {
            header("Location: /submitted.php");
            exit;
        } else {
            echo "Error saving your application. Please try again later.";
        }
    } else {
        // Invalid email
        echo "Invalid email address.";
    }
} else {
    // Prevent direct access without POST
    header("Location: /");
    exit;
}
