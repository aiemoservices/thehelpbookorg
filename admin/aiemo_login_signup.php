<?php
session_start();

// Enable error reporting (VERY IMPORTANT)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// Allow all origins (CORS)
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");


if ($_SERVER["REQUEST_METHOD"] === "OPTIONS") {
    http_response_code(200);
    exit();
}

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(403);
    die(json_encode(["success" => false, "message" => "Direct access not allowed!"]));
}

// Database configuration
$servername = "mysql.hostinger.com";
$username = "u741892818_aiemoservice";
$password = "Aiemo@123";
$database = "u741892818_aiemoservice";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die(json_encode(["success" => false, "message" => "Connection failed: " . $conn->connect_error]));
}

// Create users table if not exists
$conn->query("CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    phone VARCHAR(20) UNIQUE NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    token VARCHAR(255) NULL
)");

header('Content-Type: application/json');
$action = $_POST['action'] ?? '';

if ($action == "signup") {
    $full_name = $_POST['full_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        echo json_encode(["success" => false, "message" => "Passwords do not match!"]);
        exit();
    }

    $hashed_password = password_hash($password, PASSWORD_BCRYPT);
    $stmt = $conn->prepare("INSERT INTO users (full_name, phone, email, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $full_name, $phone, $email, $hashed_password);

    if ($stmt->execute()) {
        echo json_encode(["success" => true, "message" => "Signup successful!"]);
    } else {
        echo json_encode(["success" => false, "message" => "Error: " . $stmt->error]);
    }
    $stmt->close();
} elseif ($action == "login") {
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, full_name, password FROM users WHERE phone = ?");
    $stmt->bind_param("s", $phone);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $full_name, $hashed_password);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            $token = bin2hex(random_bytes(32));
            $update_stmt = $conn->prepare("UPDATE users SET token = ? WHERE id = ?");
            $update_stmt->bind_param("si", $token, $id);
            $update_stmt->execute();
            $update_stmt->close();

            echo json_encode(["success" => true, "token" => $token]);
        } else {
            echo json_encode(["success" => false, "message" => "Invalid credentials!"]);
        }
    } else {
        echo json_encode(["success" => false, "message" => "User not found!"]);
    }
    $stmt->close();
}

$conn->close();
?>
