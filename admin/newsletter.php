<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

    if ($email) {
        // TODO: Save email to database or file, or trigger email logic.
        // Example (log to file):
        file_put_contents("newsletter_subscribers.txt", $email . PHP_EOL, FILE_APPEND);

        // Redirect to success page
        header("Location: /submitted.php");
        exit;
    } else {
        // Invalid email
        echo "Invalid email address.";
    }
} else {
    // Prevent direct access without POST
    header("Location: /");
    exit;
}
