<?php
session_start(); // Start the session if it hasn't been started already

// Check if the user is logged in
if (isset($_SESSION['fname'])) {
    $fname = $_SESSION['fname'];
    //echo "<script>alert('Welcome, $fname');</script>";
} else {
    // Session ended, display message and redirect
    echo "<script>alert('Session ended. You have to login first.'); window.location.href = 'login.php';</script>";
    exit();
}
?>




<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Sahco Cooperative :: Membership Tracking</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
    <link rel="icon" type="image/x-icon" href="img/sahco coop logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src='main.js'></script>
</head>

<body>
    <div class="container-fluid">
        <a href="index.php"><img src="img/coop logo.png" class="mx-auto d-block rounded img-fluid" alt="Coop logo"></a>
        <nav class="navbar navbar-expand-sm navbar-light justify-content-center" style="background-color: orange;">
            <ul class="navbar-nav text-white ">
                <li class="nav-item">
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="dashboard.php">Overview</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Reports</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="savings.php">Savings</a></li>
                        <li><a class="dropdown-item" href="shares.php">Shares</a></li>
                        <li><a class="dropdown-item" href="coop-loans.php">Cooperative Loans</a></li>
                        <li><a class="dropdown-item" href="e-loans.php">Electronic Loans</a></li>
                        <li><a class="dropdown-item" href="commodity-loans.php">Commodity Loans</a></li>
                        <li><a class="dropdown-item" href="emergency-loans.php">Emergency Loans</a></li>
                        <li><a class="dropdown-item" href="other-loans.php">Other Loans</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Apply</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="apply.php">Apply for a loan</a></li>
                        <li><a class="dropdown-item" href="buy.php">Buy a commodity</a></li>
                        <li><a class="dropdown-item" href="loan-tracking.php">Track loan status</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
            <a class="navbar-brand ms-5" href="profile.php">
                <img src="img/sahco coop logo.png" alt="Avatar Logo" style="width:40px;" class="rounded-pill">
            </a>
        </nav>
    </div>
    <div class="container mt-5 text-center row justify-content-center mx-auto">
        <div class="col-sm-3 img-thumbnail mx-2">
            <i class="fa fa-university mt-5 float-start"
                style="font-size: 70px; color: #aaa; transition: 0.3s ease; opacity: 0.3;" aria-hidden="true"></i>
            <div class="float-end">
                <h1 class="display-6 mt-5">N90,000</h1>
                <p class="float-end">Savings</p>
            </div>
        </div>
        <div class="col-sm-3 img-thumbnail mx-2">
            <i class="fa-line-chart mt-5 float-start" style="font-size: 70px;" aria-hidden="true"></i>
            <div class="float-end">
                <h1 class="display-6 mt-5">N90,000</h1>
                <p class="float-end">Shares</p>
            </div>
        </div>
        <div class="col-sm-3 img-thumbnail mx-2">
            <i class="fa fa-handshake-o mt-5 float-start" style="font-size: 70px;" aria-hidden="true"></i>
            <div class="float-end">
                <h1 class="display-6 mt-5">N90,000</h1>
                <p class="float-end">Cooperative Loans</p>
            </div>
        </div>
    </div>
    <div class="container mt-5 text-center row justify-content-center mx-auto">
        <div class="col-sm-3 img-thumbnail mx-2">
            <i class="fa fa-university mt-5 float-start" style="font-size: 70px;" aria-hidden="true"></i>
            <div class="float-end">
                <h1 class="display-6 mt-5">N90,000</h1>
                <p class="float-end">Electronic Loans</p>
            </div>
        </div>
        <div class="col-sm-3 img-thumbnail mx-2">
            <i class="fa fa-university mt-5 float-start" style="font-size: 70px;" aria-hidden="true"></i>
            <div class="float-end">
                <h1 class="display-6 mt-5">N90,000</h1>
                <p class="float-end">Commodity Loans</p>
            </div>
        </div>
        <div class="col-sm-3 img-thumbnail mx-2">
            <i class="fa fa-university mt-5 float-start" style="font-size: 70px;" aria-hidden="true"></i>
            <div class="float-end">
                <h1 class="display-6 mt-5">N90,000</h1>
                <p class="float-end">Emergency Loans</p>
            </div>
        </div>
    </div>
    <div class="container mt-5 text-center row justify-content-center mx-auto">
        <div class="col-sm-3 img-thumbnail mx-2">
            <i class="fa fa-university mt-5 float-start" style="font-size: 70px;" aria-hidden="true"></i>
            <div class="float-end">
                <h1 class="display-6 mt-5">N90,000</h1>
                <p class="float-end">Other Loans</p>
            </div>
        </div>
        <div class="col-sm-3 img-thumbnail mx-2">
            <i class="fa fa-university mt-5 float-start" style="font-size: 70px;" aria-hidden="true"></i>
            <div class="float-end">
                <h1 class="display-6 mt-5">N90,000</h1>
                <p class="float-end">Savings</p>
            </div>
        </div>
        <div class="col-sm-3 img-thumbnail mx-2">
            <i class="fa fa-university mt-5 float-start" style="font-size: 70px;" aria-hidden="true"></i>
            <div class="float-end">
                <h1 class="display-6 mt-5">N90,000</h1>
                <p class="float-end">Savings</p>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>