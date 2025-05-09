<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submitted</title>

<body>
    
<?php
// Define the file path
$filePath = 'contact_messages.txt';

// Initialize message variables
$message = '';
$messageClass = '';

// Check if form data is received
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name'], $_POST['email'], $_POST['subject'], $_POST['message'])) {
    // Retrieve and sanitize form data, only if all fields are set and not empty
    $name = !empty($_POST['name']) ? htmlspecialchars($_POST['name']) : null;
    $email = !empty($_POST['email']) ? htmlspecialchars($_POST['email']) : null;
    $subject = !empty($_POST['subject']) ? htmlspecialchars($_POST['subject']) : null;
    $messageContent = !empty($_POST['message']) ? htmlspecialchars($_POST['message']) : null;

    // Check if all fields have valid values
    if ($name && $email && $subject && $messageContent) {
        // Format the data to save
        $data = "Name: $name\n";
        $data .= "Email: $email\n";
        $data .= "Subject: $subject\n";
        $data .= "Message: $messageContent\n";
        $data .= "-----------------------------\n";

        // Save data to the file in append mode
        if (file_put_contents($filePath, $data, FILE_APPEND | LOCK_EX)) {
            $message = "Thank you! Your message has been saved.";
            $messageClass = 'success';
        } else {
            $message = "There was an error saving your message. Please try again.";
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
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .message-box {
            padding: 15px;
            border-radius: 5px;
            text-align: center;
            width: 100%;
            max-width: 500px;
            margin: 20px auto;
            display: block;
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
<body onload="showMessage()">

<?php if ($message): ?>
    <div id="messageBox" class="message-box <?= $messageClass ?>">
        <?= $message ?>
    </div>
    <div><a href="../contact.php">Go Back</a></div>
<?php endif; ?>

    
</body>
</html>