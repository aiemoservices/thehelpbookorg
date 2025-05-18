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
    <title>Welcome - admin | The Helpbook Foundation</title>
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
    <div class="container">
        <h2>Welcome, <?= htmlspecialchars($_SESSION['username']) ?>!</h2>
        <p>Temporary Dashboard (Updated Soon.. Check for updates in webhook).</p>


        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            body {
                background: #f7f7f7;
                padding: 30px;
            }

            h2 {
                color: #fc5f7c;
                margin-top: 40px;
            }

            .table th {
                background-color: #fc5f7c;
                color: white;
            }

            .no-data {
                color: gray;
                font-style: italic;
            }

            .section {
                margin-bottom: 60px;
            }
        </style>
        <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-10 mb-5"></div>
        <a href="aiemoaware.php" class="btn btn-outline-primary px-4 py-2 rounded-pill shadow-sm">
            🔍 Check Job Alerts Forms (Aiemoaware)
        </a>
        <br>
        <br>
        <a href="editor.php" class="btn btn-outline-success px-4 py-2 rounded-pill shadow-sm">
            ➕ Add a New Post
        </a>
    </div>
    </div>
    <div class="container mt-5">
        <h1 class="text-center mb-5">📋 All Form Submissions</h1>

        <div class="section">
            <h2>Help Requests</h2>
            <?php renderSubmissions("help.txt"); ?>
        </div>

        <div class="section">
            <h2>Contact Messages</h2>
            <?php renderSubmissions("contact.txt"); ?>
        </div>

        <div class="section">
            <h2>Newsletter Subscriptions</h2>
            <?php renderSubmissions("newsletter.txt"); ?>
        </div>

        <div class="section">
            <h2>Join Applications</h2>
            <?php renderSubmissions("Join.txt"); ?>
        </div>
    </div>

    <?php
    function renderSubmissions($filename)
    {
        if (!file_exists($filename) || filesize($filename) === 0) {
            echo '<p class="no-data">No submissions found.</p>';
            return;
        }

        $content = file_get_contents($filename);
        $entries = array_filter(array_map('trim', explode('-----', $content)));

        if (empty($entries)) {
            echo '<p class="no-data">No submissions found.</p>';
            return;
        }

        echo '<div class="table-responsive"><table class="table table-bordered table-striped">';
        echo '<thead><tr>';

        // Extract all unique keys from entries
        $allKeys = [];
        foreach ($entries as $entry) {
            preg_match_all('/^([A-Za-z ]+):/m', $entry, $matches);
            $allKeys = array_merge($allKeys, $matches[1]);
        }
        $columns = array_unique(array_map('trim', $allKeys));

        foreach ($columns as $col) {
            echo '<th>' . htmlspecialchars($col) . '</th>';
        }
        echo '</tr></thead><tbody>';

        foreach ($entries as $entry) {
            $lines = explode("\n", trim($entry));
            $data = [];
            foreach ($columns as $col) {
                $data[$col] = ''; // Default empty
            }
            foreach ($lines as $line) {
                $parts = explode(':', $line, 2);
                if (count($parts) == 2) {
                    $key = trim($parts[0]);
                    $value = trim($parts[1]);
                    $data[$key] = $value;
                }
            }

            echo '<tr>';
            foreach ($columns as $col) {
                echo '<td>' . htmlspecialchars($data[$col]) . '</td>';
            }
            echo '</tr>';
        }

        echo '</tbody></table></div>';
    }
    ?>

    <form action="logout.php" method="post">
        <button type="submit" class="logout-btn">Logout</button>
    </form>

</body>

</html>