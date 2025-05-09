<?php
// Suppress warnings and notices
error_reporting(E_ERROR | E_PARSE);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $errors = [];

    // Sanitize and validate input fields from Step 1
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

    if (!$name) {
        $errors[] = "Name is required.";
    }
    if (!$email) {
        $errors[] = "A valid email is required.";
    }
    if (!$phone) {
        $errors[] = "Phone number is required.";
    }
    if (!$message) {
        $errors[] = "Message is required.";
    }

    // Sanitize and validate input fields from Step 2
    $age = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);
    $bloodGroup = filter_input(INPUT_POST, 'bloodGroup', FILTER_SANITIZE_STRING);
    $education = filter_input(INPUT_POST, 'education', FILTER_SANITIZE_STRING);
    $profession = filter_input(INPUT_POST, 'profession', FILTER_SANITIZE_STRING);
    $skills = filter_input(INPUT_POST, 'skills', FILTER_SANITIZE_STRING);

    if (!$age || $age < 1) {
        $errors[] = "Valid age is required.";
    }
    if (!$bloodGroup) {
        $errors[] = "Blood group is required.";
    }
    if (!$education) {
        $errors[] = "Education qualification is required.";
    }
    if (!$profession) {
        $errors[] = "Profession is required.";
    }
    if (!$skills) {
        $errors[] = "Skill of interest is required.";
    }

    // If no errors, save data to file
    if (empty($errors)) {
        $formattedData = "Name: $name\n" .
                         "Email: $email\n" .
                         "Phone No: $phone\n" .
                         "Message: $message\n" .
                         "Age: $age\n" .
                         "Blood Group: $bloodGroup\n" .
                         "Education Qualification: $education\n" .
                         "Profession: $profession\n" .
                         "Skill of Interest: $skills\n" .
                         "-----------------------------\n";

        // Append data to the file in the specified format
        file_put_contents("join_requests.txt", $formattedData, FILE_APPEND);

        // Redirect to join.php
        header("Location: ./success.php");
        exit;
    } else {
        // If there are errors, redirect to join.php with error messages
        header("Location: ../join.php");
        exit;
    }
} else {
    // Redirect to join.php if the request method is not POST
    header("Location: ../join.php");
    exit;
}
