<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Create the database if it doesn't exist
    $conn->exec("CREATE DATABASE IF NOT EXISTS sahcoop");
    $conn->exec("USE sahcoop");

    // Create the registrations table
    $conn->exec("CREATE TABLE IF NOT EXISTS registrations (
        id INT AUTO_INCREMENT PRIMARY KEY,
        fname VARCHAR(255),
        lname VARCHAR(255),
        staffid VARCHAR(255),
        gender VARCHAR(255),
        mstatus VARCHAR(255),
        dob DATE,
        addr VARCHAR(255),
        email VARCHAR(255),
        tel VARCHAR(255),
        position VARCHAR(255),
        appointmentdate DATE,
        passport VARCHAR(255),
        bankname VARCHAR(255),
        contribution VARCHAR(255),
        sortcode VARCHAR(255),
        acctnum VARCHAR(255),
        branch VARCHAR(255),
        fnokname VARCHAR(255),
        fnokphone VARCHAR(255),
        fnokrel VARCHAR(255),
        fnokaddr VARCHAR(255),
        snokname VARCHAR(255),
        snokphone VARCHAR(255),
        snokrel VARCHAR(255),
        snokaddr VARCHAR(255),
        fgname VARCHAR(255),
        fgstaffid VARCHAR(255),
        sgname VARCHAR(255),
        sgstaffid VARCHAR(255),
        idcard VARCHAR(255),
        utilitybill VARCHAR(255),
        pswd VARCHAR(255)
    )");

    echo "Database and table created successfully.";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
