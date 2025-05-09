<?php
// POST form data from POST request
$name = isset($_POST['name']) ? trim($_POST['name']) : 'N/A';
$email = isset($_POST['email']) ? trim($_POST['email']) : 'N/A';
$phone = isset($_POST['phone']) ? trim($_POST['phone']) : 'N/A';
$experience = isset($_POST['experience']) ? trim($_POST['experience']) : 'N/A';

// Prepare the formatted string
$formattedData = "Name: $name\nEmail: $email\nPhone: $phone\nExperience: $experience\n-----------------------------\n";

// Path to the file
$file = 'foster.txt';

// Append data to the file
file_put_contents($file, $formattedData, FILE_APPEND | LOCK_EX);

// Redirect back to the form page with a success message
header("Location: ./success.php");
exit;
?>
