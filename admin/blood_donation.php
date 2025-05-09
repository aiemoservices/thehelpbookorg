<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donation - admin | The Helpbook Foundation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            text-align: center;
            padding-top: 50px;
        }
        h2 {
            color: #e31d53;
        }
        .logout-btn {
            position: fixed;
            top: 10px;
            right: 10px;
            background-color: #e31d53;
            color: #ffffff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .logout-btn:hover {
            background-color: #7d2e42;
        }
    </style>
</head>
<body>

<h2>Welcome, <?= htmlspecialchars($_SESSION['username']) ?>!</h2>
<div style="text-align: center; width: 100%; margin: 20px 0;"><a href="./welcome.php">Go Back</a></div>


<style>
        .container {
            max-width: 800px;
            margin: auto;
        }
        h2 {
            color: #e31d53; /* Updated shade */
            text-align: center;
            margin-bottom: 30px;
        }
        .entry {
            background-color: #f8e9f0; /* Light background */
            border: 1px solid #d6a5bc;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 20px;
        }
        .entry h3 {
            color: #7d2e42; /* Darker for entry title */
            margin-top: 0;
        }
        .entry p {
            margin: 5px 0;
        }
        .label {
            font-weight: bold;
            color: #7d2e42; /* Same shade for labels */
        }
        .email-link {
            color: #1e88e5;
            text-decoration: none;
        }
        .email-link:hover {
            text-decoration: underline;
        }
    </style>
    <div class="container">
        <h2>All Requests</h2>

        <h3>Donations</h3>
        <?php
        $adoptionFile = 'blood_donation.txt';
        if (file_exists($adoptionFile)) {
            $content = file_get_contents($adoptionFile);
            $entries = explode("-----------------------------", trim($content));

            foreach ($entries as $entry) {
                if (!empty(trim($entry))) {
                    echo "<div class='entry'>";
                    $lines = explode("\n", trim($entry));
                    
                    foreach ($lines as $line) {
                        $parts = explode(": ", $line, 2);
                        if (count($parts) == 2) {
                            $label = htmlspecialchars($parts[0]);
                            $value = htmlspecialchars($parts[1]);
                            if ($label == "Email") {
                                $value = "<a href='mailto:$value' class='email-link'>$value</a>";
                            }
                            echo "<p><span class='label'>$label:</span> $value</p>";
                        }
                    }
                    echo "</div>";
                }
            }
        } else {
            echo "<p>No adoption requests found.</p>";
        }
        ?>

        <h3>Requests</h3>
        <?php
        $donationFile = 'blood_request.txt';
        if (file_exists($donationFile)) {
            $content = file_get_contents($donationFile);
            $entries = explode("-----------------------------", trim($content));

            foreach ($entries as $entry) {
                if (!empty(trim($entry))) {
                    echo "<div class='entry'>";
                    $lines = explode("\n", trim($entry));
                    
                    foreach ($lines as $line) {
                        $parts = explode(": ", $line, 2);
                        if (count($parts) == 2) {
                            $label = htmlspecialchars($parts[0]);
                            $value = htmlspecialchars($parts[1]);
                            if ($label == "Email") {
                                $value = "<a href='mailto:$value' class='email-link'>$value</a>";
                            }
                            echo "<p><span class='label'>$label:</span> $value</p>";
                        }
                    }
                    echo "</div>";
                }
            }
        } else {
            echo "<p>No student donation requests found.</p>";
        }
        ?>


    </div>


<form action="logout.php" method="post">
    <button type="submit" class="logout-btn">Logout</button>
</form>

</body>
</html>
