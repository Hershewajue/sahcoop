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
                <li class="nav-item">
                    <a class="nav-link" href="loan-tracking.php">Loan tracking</a>
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
        <div class="col-sm-4 ">
            <img class="img-thumbnail" width="400" height="400" src="img/tracking.jpg" alt="Sahco Logo">
        </div>
        <div class="col-sm-8 img-thumbnail">
            <form method="post" action="tracking.php" class="needs-validated mx-auto">
                <h1 class="display-6 mt-4 mb-4">Application tracking</h1>
                <div class="input-group mb-3 mt-3">
                    <span class="input-group-text">Application number or Staff ID:</span>
                    <input type="text" class="form-control" id="user"
                        placeholder="Enter email or staff number (SAH-0000)" name="user" required>
                </div>
                <button type="submit" id="track" name="track" class="btn btn-primary col-sm-12">Track</button>
            </form>
        </div>
    </div>
    <div class="container-fluid mt-5 p-4 bg-dark text-white row">
        <div class="col-sm-6">
            <h3 class="display-6">Contact Us</h3>
            <p class="text-white-50"><i class="fa fa-map-marker"></i> Cargo Terminal, Murtala Mohammed International
                Airport,<br> Ikeja, Lagos. P.M.B 21768,</p>
            <p class="text-white-50"><i class="fa fa-phone"></i><a style="text-decoration: none;"
                    href="tel:+234 701 253 5707"> +234 701 253 5707</a></p>
            <p class="text-white-50"><i class="fa fa-envelope"></i><a style="text-decoration: none;"
                    href="mailto:amedujosepho@gmail.com"> amedujosepho@gmail.com</a></p>
        </div>
        <div class="col-sm-6 icon-bar">
            <h3 class="display-6">Our Socials</h3><br>
            <a href="#" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a>
            <a href="#" target="_blank" class="linkedin"><i class="fa fa-linkedin"></i></a>
            <a href="#" target="_blank" class="youtube"><i class="fa fa-youtube"></i></a>
            <p class="text-white-50 mt-4">&copy; SAHCO Staff Multipurpose Cooperative Society 2023</p>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--
    <script type="text/javascript">
        $(function () {
            $('#track').click(function () {

                var valid = this.form.checkValidity();
                if (valid) {
                    //e.preventDefault();
                    //alert("true");
                    swal.fire({
                'title': 'Hello User!',
                'text': 'Record was submitted successfully!',
                'type': 'success'
            })
                } else {
                    //alert("false");
                    swal.fire({
                'title': 'Hello User!',
                'text': 'There was some errors submitting your data',
                'type': 'success'
            })
                }

                var fname = $('#fname').val();
                var lname = $('#fname').val();
                
                 
            })
            swal.fire({
                'title': 'Hello User!',
                'text': 'Welcome to the our Application Tracking page',
                'type': 'success'
            
            })
        });
    </script>
    -->
</body>

</html>