<?php
session_start(); // Start the session if it hasn't been started already

// Check if the user is logged in
if (isset($_SESSION['fname'])) {
    $fname = $_SESSION['fname'];
    echo "<script>alert('Welcome, $fname');</script>";
} else {
    // Session ended, display message and redirect
    echo "<script>alert('Session ended. You have to login first.'); window.location.href = 'login.php';</script>";
    exit();
}
?>
