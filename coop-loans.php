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
                    <a class="nav-link" href="dashboard.php">Overview</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" role="button"
                        data-bs-toggle="dropdown">Reports</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="savings.php">Savings</a></li>
                        <li><a class="dropdown-item" href="shares.php">Shares</a></li>
                        <li><a class="dropdown-item active" href="coop-loans.php">Cooperative Loans</a></li>
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
                <i class="fa fa-user-circle" style="font-size: 30px;" aria-hidden="true"></i>
            </a>
        </nav>
    </div>
    <div class="container img-thumbnail mt-2 p-2">
        <div class="container text-center row justify-content-center mx-auto">
            <form method="post" action="savings.php" class="needs-validated mx-auto">
                <h1 class="display-6 mt-4 mb-4">Cooperative Loans History</h1>
                <div class="row">
                    <div class="input-group col mb-3 mt-3">
                        <span class="input-group-text">From:</span>
                        <input type="date" class="form-control" id="dateFrom" name="dateFrom" required>
                    </div>
                    <div class="input-group col mb-3 mt-3">
                        <span class="input-group-text">To:</span>
                        <input type="date" class="form-control" id="dateTo" name="dateTo" required>
                    </div>
                    <div class="input-group col mb-3 mt-3">
                        <button class="btn btn-success" type="submit" id="search" name="search"><i
                                class="fa fa-search my-auto iconz" aria-hidden="true"
                                style="font-size: 30px"></i></button>
                    </div>
                </div>
                <div class="row">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Transaction Date</th>
                                <th scope="col">Staff Name</th>
                                <th scope="col">Staff Number</th>
                                <th scope="col">Loan Type</th>
                                <th scope="col">Loan Granted (₦)</th>
                                <th scope="col">Loan Repayment (₦)</th>
                                <th scope="col">Balance (₦)</th>
                                <th scope="col">Remarks</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>@twitter</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>@twitter</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>@twitter</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>@twitter</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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