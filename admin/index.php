<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: ./welcome.php");
    exit();
} else {
    header("Location: ./login.php");
    exit();
}
?>