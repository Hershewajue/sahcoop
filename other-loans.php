<?php
session_start(); // Start the session if it hasn't been started already

// Check if the user is logged in
if (isset($_SESSION['fname'])) {
    $fname = $_SESSION['fname'];
    echo "Welcome, $fname";
} else {
    // Session ended, display message and redirect
    echo "Session ended. You have to login first.";
    header("refresh:2; url=login.php"); // Redirect after 2 seconds
    exit();
}
?>
