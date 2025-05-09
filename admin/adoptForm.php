<?php
// Define the file path
$filePath = 'adoption_requests.txt';

// Initialize message variables
$message = '';
$messageClass = '';


// Check if form data is received
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['fullName'], $_POST['email'], $_POST['phone'], $_POST['petType'], $_POST['message'])) {
    // Retrieve and sanitize form data, only if all fields are set and not empty
    $fullName = !empty($_POST['fullName']) ? htmlspecialchars($_POST['fullName']) : null;
    $email = !empty($_POST['email']) ? htmlspecialchars($_POST['email']) : null;
    $phone = !empty($_POST['phone']) ? htmlspecialchars($_POST['phone']) : null;
    $petType = !empty($_POST['petType']) ? htmlspecialchars($_POST['petType']) : null;
    $messageContent = !empty($_POST['message']) ? htmlspecialchars($_POST['message']) : null;

    // Check if all fields have valid values
    if ($fullName && $email && $phone && $petType && $messageContent) {
        // Format the data to save
        $data = "Full Name: $fullName\n";
        $data .= "Email: $email\n";
        $data .= "Phone Number: $phone\n";
        $data .= "Type of Pet: $petType\n";
        $data .= "Message: $messageContent\n";
        $data .= "-----------------------------\n";

        // Save data to the file in append mode
        if (file_put_contents($filePath, $data, FILE_APPEND | LOCK_EX)) {
            $message = "Thank you! Your adoption request has been saved.";
            $messageClass = 'success';
        } else {
            $message = "There was an error saving your request. Please try again.";
            $messageClass = 'error';
        }
    } else {
        $message = "Please fill in all fields before submitting.";
        $messageClass = 'error';
    }
} else {
    $message = "Invalid request method or missing form data.";
    $messageClass = 'error';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adoption Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
            background-color: #f4f4f9;
            text-align: center;
        }
        .message-box {
            padding: 15px;
            border-radius: 5px;
            text-align: center;
            width: 100%;
            max-width: 500px;
            margin: 20px auto;
        }
        .success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        .error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
    </style>
</head>
<body>

<?php if ($message): ?>
    <div class="message-box <?= $messageClass ?>">
        <?= $message ?>
    </div>
    <div><a href="../">Go Back</a></div>
<?php endif; ?>

</body>
</html>
