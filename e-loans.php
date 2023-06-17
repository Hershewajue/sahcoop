<?php
session_start(); // Start the session if it hasn't been started already

// Check if the user is logged in
if (isset($_SESSION['fname'])) {
    $fname = $_SESSION['fname'];
    echo "Welcome, $fname";
} else {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit();
}
?>