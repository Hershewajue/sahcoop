<?php
session_start(); // Start the session if it hasn't been started already

// Destroy the session
session_destroy();

// Redirect to the login page
header("Location: login.php");
exit();
?>
