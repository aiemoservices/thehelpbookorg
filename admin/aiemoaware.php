<?php
// Start the session
session_start();

// Check if the page was accessed with a GET request (for display purposes)
if ($_SERVER['REQUEST_METHOD'] == 'GET' && !isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$allowed_origins = ['https://www.aiemoaware.com', 'https://thehelpbook.org'];

// $allowed_origins = ['https://thehelpbook.org']; // In case of issue (DOS/DDOS attack) on aiemoaware.com please comment the above variable and uncomment this one


if (in_array($_SERVER['HTTP_ORIGIN'], $allowed_origins)) {
    header("Access-Control-Allow-Origin: " . $_SERVER['HTTP_ORIGIN']);
}

header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

// Database credentials
$host = 'mysql.hostinger.com';
$username = 'u741892818_aiemoawareu';
$password = 'Thehelpbook24';
$dbname = 'u741892818_aiemoaware';

// Create a connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create the table if it does not exist
$table_creation_query = "
CREATE TABLE IF NOT EXISTS `aiemoaware_form` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `phone` VARCHAR(20) NOT NULL,
    `pdf_file_name` VARCHAR(255) NOT NULL,
    `uploaded_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
$conn->query($table_creation_query);

// Handle the form submission (POST request)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    // Handle file upload
    $target_dir = "aiemoaware_pdf/";  // Folder to save PDFs

    // Check if the directory is writable and set permissions if not
    if (!is_writable($target_dir)) {
        chmod($target_dir, 0755);  // Set folder permissions
    }

    $pdf_name = $_FILES['file']['name'];
    $file_tmp_name = $_FILES['file']['tmp_name'];
    $file_type = pathinfo($pdf_name, PATHINFO_EXTENSION);

    // Validate if file is PDF
    if ($file_type != "pdf") {
        echo "Only PDF files are allowed!";
        exit;
    }

    // Generate the new file name based on name and current timestamp
    $new_pdf_name = strtolower(str_replace(' ', '', $name)) . '_' . time() . '.pdf';
    $target_file = $target_dir . $new_pdf_name;

    // Upload the file
    if (move_uploaded_file($file_tmp_name, $target_file)) {
        // Prepare SQL query to insert form data into the database
        $stmt = $conn->prepare("INSERT INTO aiemoaware_form (name, phone, pdf_file_name) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $phone, $new_pdf_name);

        // Execute the query and check if data was inserted successfully
        if ($stmt->execute()) {
            echo "Form submitted successfully!";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close statement
        $stmt->close();
    } else {
        echo "Error uploading the file.";
    }
}

// Fetch the saved information from the database
$query = "SELECT * FROM aiemoaware_form ORDER BY uploaded_at DESC";
$result = $conn->query($query);

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AIEMO Aware Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        form {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input[type="text"], input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        button {
            background-color: #ff6600;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button.logout-btn {
            background-color: #f44336;
        }
        .form-output {
            margin-top: 30px;
        }
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Aiemoware Form</h1>

    <!-- Logout Button -->
    <form action="logout.php" method="post">
        <button type="submit" class="logout-btn">Logout</button>
    </form>

    <div class="form-output">
        <h2>Saved Information</h2>
        <?php if ($result->num_rows > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>PDF File</th>
                        <th>Uploaded At</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td><a href="aiemoaware_pdf/<?php echo $row['pdf_file_name']; ?>" target="_blank"><?php echo $row['pdf_file_name']; ?></a></td>
                            <td><?php echo $row['uploaded_at']; ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No submissions yet.</p>
        <?php endif; ?>
    </div>
</body>
</html>
