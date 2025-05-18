<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Older Submitted Data | The Helpbook Foundation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            text-align: center;
            padding-top: 50px;
        }

        h2 {
            color: #388e3c;
        }

        .logout-btn {
            position: fixed;
            top: 10px;
            right: 10px;
            background-color: #4CAF50;
            color: #ffffff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .logout-btn:hover {
            background-color: #388e3c;
        }
    </style>
</head>

<body>

    <h2>Viewing Older (Before May 2025) Data Via <?= htmlspecialchars($_SESSION['username']) ?></h2>
    <br />
    <div style="text-align: center; width: 100%; margin: 20px 0;"><a href="./blood_donation.php">View Blood Donation
            Page</a></div>



    <style>
        .container {
            max-width: 800px;
            margin: auto;
        }

        h2 {
            color: #2e7d32;
            /* Updated green shade */
            text-align: center;
            margin-bottom: 30px;
        }

        .entry {
            background-color: #f1f8e9;
            /* Light green background */
            border: 1px solid #a5d6a7;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 20px;
        }

        .entry h3 {
            color: #1b5e20;
            /* Darker green for entry title */
            margin-top: 0;
        }

        .entry p {
            margin: 5px 0;
        }

        .label {
            font-weight: bold;
            color: #2e7d32;
            /* Same green shade for labels */
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
        <!-- Adoption Requests Section -->
        <h3>Adoption Requests</h3>
        <?php
        $adoptionFile = 'adoption_requests.txt';
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


        <h3>Adoption Requests for Specific Pets</h3>
        <?php
        $adoptionFile = 'adoption_requests_specs.txt';
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

        <!-- Student Donation Requests Section -->
        <h3>Student Donation Requests</h3>
        <?php
        $donationFile = 'student_donations.txt';
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

        <!-- Student Requests Section -->
        <h3>Student Requests</h3>
        <?php
        $studentRequestFile = 'student_donations_req.txt';
        if (file_exists($studentRequestFile)) {
            $content = file_get_contents($studentRequestFile);
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
            echo "<p>No student requests found.</p>";
        }
        ?>

        <!-- Contact Messages Section -->
        <h3>Contact Messages</h3>
        <?php
        $contactFile = 'contact_messages.txt';
        if (file_exists($contactFile)) {
            $content = file_get_contents($contactFile);
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
            echo "<p>No contact messages found.</p>";
        }
        ?>


        <!-- Contact Messages Section -->
        <h3>Join Requests</h3>
        <?php
        $contactFile = 'join_requests.txt';
        if (file_exists($contactFile)) {
            $content = file_get_contents($contactFile);
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
            echo "<p>No join requests found.</p>";
        }

        ?>


        <h3>Foster A Pet Requests</h3>
        <?php
        $contactFile = 'foster.txt';
        if (file_exists($contactFile)) {
            $content = file_get_contents($contactFile);
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
            echo "<p>No foster a pet requests found.</p>";
        }
        ?>



        <h3>Donations</h3>
        <?php
        $contactFile = 'donations.txt';
        if (file_exists($contactFile)) {
            $content = file_get_contents($contactFile);
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
            echo "<p>No foster a pet requests found.</p>";
        }
        ?>



        <h3>Adoption Requests Form</h3>
        <?php
        $contactFile = 'adoption_requests_proc.txt';
        if (file_exists($contactFile)) {
            $content = file_get_contents($contactFile);
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
            echo "<p>No Adoption requests found.</p>";
        }
        ?>



    </div>


    <form action="logout.php" method="post">
        <button type="submit" class="logout-btn">Logout</button>
    </form>

</body>

</html>