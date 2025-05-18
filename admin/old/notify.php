<?php
// Define the file path
$file_path = 'emails.txt';

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the name and email from the POST request
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    // Check if the email is valid
    if ($email && !empty($name)) {
        // Prepare the content to be saved
        $content = "Name: $name\nEmail: $email\n-----------------------------\n";

        // Append the content to the email.txt file

        file_put_contents($file_path, $content, FILE_APPEND | LOCK_EX);
?>

<script>

alert("Thank you for subscribing...");
window.location.href = "../";
</script>

<?php

    } else {
        // Invalid email or name

        ?>

        <script>
        
        alert("Invalid name or email...");
        window.location.href = "../";
        
        </script>


<?php

    }
} else {
    // Redirect to the form page if accessed directly
    header('Location: ../notify.php');
    exit;
}
?>
