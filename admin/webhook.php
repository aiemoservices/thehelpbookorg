<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Define the directory where the repo will be downloaded or is already downloaded
$repo_dir = '../';  // Current directory
$repo_url = 'https://github.com/aiemoservices/thehelpbookorg/archive/refs/heads/main.zip';  // URL for the main branch ZIP
$log_file = 'git_pull_log.txt';  // Path to your log file

// Open log file for appending
$log = fopen($log_file, 'a');
if (!$log) {
    die("Error: Could not open log file.");
}

// Handle the "Pull" or "Clone" button click action
if (isset($_GET['pull'])) {
    fwrite($log, "Pull request received: " . date('Y-m-d H:i:s') . "\n");

    // Download the ZIP file from GitHub
    $zip_file = $repo_dir . 'repo.zip'; // Temporary file name to store the ZIP file

    // Use file_get_contents() or cURL to download the ZIP
    $zip_data = file_get_contents($repo_url);

    if ($zip_data === false) {
        $output = "Error: Failed to download the repository ZIP.";
        fwrite($log, "Error: $output\n");
    } else {
        // Save the ZIP data to a file
        file_put_contents($zip_file, $zip_data);

        // Unzip the file
        $zip = new ZipArchive;
        if ($zip->open($zip_file) === TRUE) {
            // Create a temporary directory to extract the files
            $temp_dir = $repo_dir . 'temp_repo/';
            if (!is_dir($temp_dir)) {
                mkdir($temp_dir);
            }

            // Extract the ZIP to the temporary directory
            $zip->extractTo($temp_dir);
            $zip->close();

            // Now we need to find the extracted folder (it will have the repo name like 'thehelpbookorg-main')
            $extracted_folder = $temp_dir . 'thehelpbookorg-main/';  // GitHub repo name + '-main'

            if (is_dir($extracted_folder)) {
                // Copy all files and directories recursively from the extracted folder
                $output = copyDirectory($extracted_folder, $repo_dir);
                fwrite($log, "Success: $output\n");

                // Delete the temporary directory after copying
                deleteDirectory($temp_dir);

                // Delete the ZIP file after extraction
                unlink($zip_file);

                $output = "Repository updated successfully.";
            } else {
                $output = "Error: Extracted folder not found or empty.";
                fwrite($log, "Error: $output\n");
            }
        } else {
            $output = "Error: Failed to extract the ZIP file.";
            fwrite($log, "Error: $output\n");
        }
    }

    fclose($log); // Close the log file
}

function deleteDirectory($dir) {
    if (!is_dir($dir)) {
        return false;
    }
    $files = array_diff(scandir($dir), array('.', '..'));
    foreach ($files as $file) {
        $filePath = $dir . DIRECTORY_SEPARATOR . $file;
        is_dir($filePath) ? deleteDirectory($filePath) : unlink($filePath);
    }
    return rmdir($dir);
}

function copyDirectory($src, $dest) {
    // Open source directory
    $dir = opendir($src);
    
    // Loop through all the files and subdirectories
    while (($file = readdir($dir)) !== false) {
        if ($file != '.' && $file != '..') {
            $src_path = $src . DIRECTORY_SEPARATOR . $file;
            $dest_path = $dest . DIRECTORY_SEPARATOR . $file;

            // If it's a directory, create it and recursively copy contents
            if (is_dir($src_path)) {
                // Create the destination directory if it doesn't exist
                if (!is_dir($dest_path)) {
                    mkdir($dest_path);
                }
                copyDirectory($src_path, $dest_path);  // Recursively copy subdirectories
            } else {
                // If it's a file, copy it (replace any existing file with the same name)
                // Always copy the file from the repo to the current directory
                copy($src_path, $dest_path);
            }
        }
    }

    closedir($dir);
    return "Files copied from $src to $dest";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GitHub Pull or Clone</title>
    <style>
    * {
        box-sizing: border-box;
    }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .btn {
            display: block;
            width: 100%;
            padding: 10px;
            margin: 20px 0;
            background-color: #007bff;
            color: white;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        pre {
            background-color: #f4f4f4;
            padding: 15px;
            border-radius: 5px;
            margin-top: 20px;
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
    <h1>Update the website from github.</h1>
    <p>Pull or clone the latest commit from github to this website (Please do not do anything if you don't know what you are doing).</p>
    <p style="color:red; text-align:center">DANGER ZONE!!!</p>
    
    <!-- The button to trigger the pull or clone operation -->
    <a href="?pull=true" class="btn">Pull or Clone Latest Code</a>

    <?php if (isset($output)): ?>
        <h2>Output:</h2>
        <pre><?php echo $output; ?></pre>
    <?php endif; ?>
</div>
<form action="logout.php" method="post">
    <button type="submit" class="logout-btn">Logout</button>
</form>


</body>
</html>
