<?php
session_start();

// Check if the user is already logged in
if (isset($_SESSION['username'])) {
    header("Location: ./welcome.php");
    exit();
}

// Handle login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hardcoded login credentials
    if ($username === "admin" && $password === "9424523268") {
        $_SESSION['username'] = $username;
        header("Location: ./welcome.php");
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            width: 300px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        h2 {
            color: #388e3c; /* Green shade for heading */
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
            text-align: left;
            display: flex;
            flex-direction: column;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            color: #2e7d32;
        }
        .form-group input[type="text"],
        .form-group input[type="password"] {
            /* width: 95%; */
            padding: 8px;
            border: 1px solid #a5d6a7;
            border-radius: 4px;
            display: block;
        }
        .submit-btn {
            background-color: #4CAF50;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 4px;
            width: 100%;
        }
        .submit-btn:hover {
            background-color: #388e3c;
        }
        .error {
            color: #d32f2f;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Login</h2>
    <form action="login.php" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit" class="submit-btn">Login</button>
        <?php if (isset($error)): ?>
            <p class="error"><?= htmlspecialchars($error) ?></p>
        <?php endif; ?>
    </form>
</div>

</body>
</html>
