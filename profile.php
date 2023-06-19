<?php
session_start(); // Start the session if it hasn't been started already

// Check if the user is logged in
if (isset($_SESSION['staffid'])) {
    $staffid = $_SESSION['staffid'];
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
            <a class="navbar-brand ms-5 active" href="profile.php">
                <i class="fa fa-user-circle" style="font-size: 30px;" aria-hidden="true"></i>
            </a>
        </nav>
    </div>
    <div class="container img-thumbnail mt-5 p-2">
        <div class="container text-center row justify-content-center mx-auto">
            <div class="col-sm-3 img-thumbnail mx-2">
                <img alt="Profile Photo" src="img/team.jpg" class="img rounded" style="width: 300px; height: 400px; ">
                <div class="input-group col mt-3">
                    <span class="input-group-text">Update profile photo:</span>
                    <input type="file" class="form-control" id="idcard" name="idcard">
                </div>
            </div>
            <div class="col-sm-8 img-thumbnail mx-2">
                <h1 class="display-6 mb-2">Profile details</h1>
                <fieldset class="form-group img-thumbnail p-2 mt-3">
                    <legend class="w-auto px-2">Personal Data</legend>
                    <?php
                    $stmt = $conn->prepare("SELECT * FROM registrations WHERE id = :staffid");
                    $stmt->bindParam(':staffid', $staffid);
                    $stmt->execute();

                    if ($stmt->rowCount() > 0) {
                        $row = $stmt->fetch(PDO::FETCH_ASSOC);

                        // Display the user's profile information
                        echo "<p>Welcome, " . $_SESSION['fname'] . "!</p>";

                        echo "<h3>Personal Information:</h3>";
                        echo "<p>First Name: " . $row['fname'] . "</p>";
                        echo "<p>Last Name: " . $row['lname'] . "</p>";
                        // Display more user information fields as needed
                    
                        echo "<h3>Contact Information:</h3>";
                        echo "<p>Email: " . $row['email'] . "</p>";
                        echo "<p>Telephone: " . $row['tel'] . "</p>";
                        // Display more contact information fields as needed
                    
                        // You can continue displaying other captured user information
                    
                    } else {
                        echo "<p>User profile not found.</p>";
                    }
                    ?>
                    <div class="mt-3 input-group">
                        <span class="input-group-text">Names:</span>
                        <input type="text" id="fname" class="form-control" placeholder="First name" name="fname"
                            disabled>
                        <input type="text" id="lname" class="form-control" placeholder="Last name" name="lname"
                            disabled>
                    </div>
                    <div class="row">
                        <div class="input-group col mt-3">
                            <span class="input-group-text">Staff ID:</span>
                            <input type="text" class="form-control " id="staffid" placeholder="SAH-****" name="staffid"
                                disabled>
                        </div>
                        <div class="input-group col mt-3">
                            <span class="input-group-text">Gender:</span>
                            <select class="form-select" id="gender" name="gender" disabled>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-group col mt-3">
                            <span class="input-group-text">Marital status:</span>
                            <select class="form-select" id="mstatus" name="mstatus">
                                <option readonly>Select one option</option>
                                <option>Single</option>
                                <option>Married</option>
                                <option>Divorced</option>
                                <option>Widow</option>
                                <option>Widower</option>
                            </select>
                        </div>
                        <div class="input-group col mt-3">
                            <span class="input-group-text">Date of birth:</span>
                            <input type="date" class="form-control" id="dob" placeholder="Enter date of birth"
                                name="dob" disabled>
                        </div>
                    </div>
                    <div class="input-group mt-3">
                        <span class="input-group-text">Contact address:</span>
                        <input type="" class="form-control" id="addr" placeholder="Enter the current contact address"
                            name="addr">
                    </div>
                    <div class="input-group mt-3">
                        <span class="input-group-text">Email address:</span>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                        <span class="input-group-text">@example.com</span>
                    </div>
                    <div class="row">
                        <div class="input-group col mt-3">
                            <span class="input-group-text">Phone number:</span>
                            <input type="tel" class="form-control" id="tel" placeholder="+2347011234567" name="tel">
                        </div>
                        <div class="input-group col mt-3">
                            <span class="input-group-text">Designation:</span>
                            <input type="text" class="form-control" id="position"
                                placeholder="Enter your current designation" name="position" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-group col mt-3">
                            <span class="input-group-text">Date of appointment:</span>
                            <input type="date" class="form-control" id="appointmentdate" name="appointmentdate"
                                disabled>
                        </div>
                        <div class="input-group col mt-3">
                            <span class="input-group-text">Monthly contribution:</span>
                            <input type="number" class="form-control" placeholder="Enter monthly contribution amount"
                                id="contribution" name="contribution" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-group col mt-3">
                            <span class="input-group-text">Bank name:</span>
                            <input type="text" class="form-control" id="bankname" placeholder="Enter the bank name"
                                name="bankname" disabled>
                        </div>
                        <div class="input-group col mt-3">
                            <span class="input-group-text">Account number:</span>
                            <input type="number" class="form-control" id="acctnum"
                                placeholder="Enter your account number" name="acctnum" disabled>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="form-group img-thumbnail p-2 mt-3">
                    <legend class="w-auto px-2">Details Of First Next Of Kin</legend>
                    <div class="row">
                        <div class="input-group col mt-3">
                            <span class="input-group-text">Name:</span>
                            <input type="text" class="form-control" id="fnokname" name="fnokname" required>
                        </div>
                        <div class="input-group col mt-3">
                            <span class="input-group-text">Phone number:</span>
                            <input type="tel" class="form-control" id="fnokphone" name="fnokphone" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-group col mt-3">
                            <span class="input-group-text">Relationship:</span>
                            <select class="form-select" id="fnokrel" name="fnokrel">
                                <option>Brother</option>
                                <option>Sister</option>
                                <option>Father</option>
                                <option>Mother</option>
                                <option>Son</option>
                                <option>Daughter</option>
                                <option>Spouse</option>
                                <option>Others</option>
                            </select>
                        </div>
                        <div class="input-group col mt-3">
                            <span class="input-group-text">Address:</span>
                            <input type="text" class="form-control" id="fnokaddr" name="fnokaddr" required>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="form-group img-thumbnail p-2 mt-3">
                    <legend class="w-auto px-2">Details of Second Next of Kin</legend>
                    <div class="row">
                        <div class="input-group col mt-3">
                            <span class="input-group-text">Name:</span>
                            <input type="text" class="form-control" id="snokname" name="snokname" required>
                        </div>
                        <div class="input-group col mt-3">
                            <span class="input-group-text">Phone number:</span>
                            <input type="tel" class="form-control" id="snokphone" name="snokphone" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-group col mt-3">
                            <span class="input-group-text">Relationship:</span>
                            <select class="form-select" id="snokrel" name="snokrel">
                                <option>Brother</option>
                                <option>Sister</option>
                                <option>Father</option>
                                <option>Mother</option>
                                <option>Son</option>
                                <option>Daughter</option>
                                <option>Spouse</option>
                                <option>Others</option>
                            </select>
                        </div>
                        <div class="input-group col mt-3">
                            <span class="input-group-text">Address:</span>
                            <input type="text" class="form-control" id="snokaddr" name="snokaddr" required>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="form-group img-thumbnail p-2 mt-3">
                    <legend class="w-auto px-2">Guarantors' Details</legend>
                    <div class="row">
                        <div class="input-group col mt-3">
                            <span class="input-group-text">First Guarantor's Name:</span>
                            <input type="text" class="form-control" id="fgname" name="fgname" required>
                        </div>
                        <div class="input-group col mt-3">
                            <span class="input-group-text">First Guarantor's staff No:</span>
                            <input type="text" class="form-control" id="fgstaffid" name="fgstaffid" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-group col mt-3">
                            <span class="input-group-text">Second Guarantor's Name:</span>
                            <input type="text" class="form-control" id="sgname" name="sgname" required>
                        </div>
                        <div class="input-group col mt-3">
                            <span class="input-group-text">Second Guarantor's staff No:</span>
                            <input type="text" class="form-control" id="sgstaffid" name="sgstaffid" required>
                        </div>
                    </div>
            </div>
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