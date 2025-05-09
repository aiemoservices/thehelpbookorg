<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Helpbook Foundation | Notify</title>
        <?php

        require 'style.php';
        
        ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <?php include 'metacommon.php'; ?>
</head>

<body>

<?php include 'header.php'; ?>

<style>
    /* Form container styling */
    .email-form-container {
        width: 100%;
        max-width: 500px;
        padding: 20px;
        margin-left: auto;
        margin-right: auto;
        border-radius: 8px;
        margin-top: 200px;
    }

    /* Heading styling */
    .email-form-container h1 {
        /* text-align: center; */
        color: #fc5f7c;
        font-size: 1.5em;
        margin-bottom: 30px;
    }

    /* Label styling */
    .email-form-container label {
        display: block;
        font-size: 1em;
        margin-bottom: 6px;
        color: #333;
    }

    /* Input field styling */
    .email-form-container input[type="email"], input[type="text"] {
        width: 100%;
        padding: 12px;
        margin-bottom: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        font-size: 1em;
    }

    /* Submit button styling */
    .email-form-container button {
        width: 100%;
        padding: 12px;
        background-color: #4CAF50;
        color: white;
        font-size: 1em;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    /* Button hover effect */
    .email-form-container button:hover {
        background-color: #45a049;
    }

    /* Form text styling */
    .email-form-container p {
        text-align: center;
        color: #666;
        font-size: 0.9em;
    }
</style>

<!-- Email Registration Form -->
<div class="email-form-container">
    <h1>Stay Notified with Helpbook</h1>
    <form action="./admin/notify.php" method="POST" onsubmit="return validateEmailNotify()">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Name" required>
        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>
        
        <button type="submit">Notify Me</button>
    </form>
    <p>We'll keep you updated with our latest initiatives and events.</p>
</div>

<?php include 'footer.php'; ?>

        <?php

        require 'script.php';
        
        ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"></script>
</body>
</html>
