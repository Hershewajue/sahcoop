<?php
require_once('connect.php');

try {
    if (isset($_POST['register'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $staffid = $_POST['staffid'];
        $gender = $_POST['gender'];
        $mstatus = $_POST['mstatus'];
        $dob = $_POST['dob'];
        $addr = $_POST['addr'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $position = $_POST['position'];
        $appointmentdate = $_POST['appointmentdate'];
        $passport = $_POST['passport'];
        $bankname = $_POST['bankname'];
        $contribution = $_POST['contribution'];
        $sortcode = $_POST['sortcode'];
        $acctnum = $_POST['acctnum'];
        $branch = $_POST['branch'];
        $fnokname = $_POST['fnokname'];
        $fnokphone = $_POST['fnokphone'];
        $fnokrel = $_POST['fnokrel'];
        $fnokaddr = $_POST['fnokaddr'];
        $snokname = $_POST['snokname'];
        $snokphone = $_POST['snokphone'];
        $snokrel = $_POST['snokrel'];
        $snokaddr = $_POST['snokaddr'];
        $fgname = $_POST['fgname'];
        $fgstaffid = $_POST['fgstaffid'];
        $sgname = $_POST['sgname'];
        $sgstaffid = $_POST['sgstaffid'];
        $idcard = $_POST['idcard'];
        $utilitybill = $_POST['utilitybill'];
        $pswd = $_POST['pswd'];
        $pswd2 = $_POST['pswd2'];

        // Check for password mismatch
        if ($pswd !== $pswd2) {
            echo "<script>alert('Passwords do not match. Please try again.');</script>";
            exit;
        }
        // Hash the password
        $hashedPswd = password_hash($pswd, PASSWORD_DEFAULT);

        // Check if email exists in the database
        $stmtCheckEmail = $conn->prepare("SELECT COUNT(*) FROM registrations WHERE email = :email");
        $stmtCheckEmail->bindParam(':email', $email);
        $stmtCheckEmail->execute();
        $result = $stmtCheckEmail->fetchColumn();

        if ($result > 0) {
            echo "<script>alert('Email already exists. Please try to login again or use the forgot password option.');</script>";
            exit;
        }

        $sql = "INSERT INTO registrations (fname, lname, staffid, gender, mstatus, dob, addr, email, tel, position, appointmentdate, passport, bankname, contribution, sortcode, acctnum, branch, fnokname, fnokphone, fnokrel, fnokaddr, snokname, snokphone, snokrel, snokaddr, fgname, fgstaffid, sgname, sgstaffid, idcard, utilitybill, pswd) VALUES (:fname, :lname, :staffid, :gender, :mstatus, :dob, :addr, :email, :tel, :position, :appointmentdate, :passport, :bankname, :contribution, :sortcode, :acctnum, :branch, :fnokname, :fnokphone, :fnokrel, :fnokaddr, :snokname, :snokphone, :snokrel, :snokaddr, :fgname, :fgstaffid, :sgname, :sgstaffid, :idcard, :utilitybill, :pswd)";

        $stmtInsert = $conn->prepare($sql);
        $stmtInsert->bindParam(':fname', $fname);
        $stmtInsert->bindParam(':lname', $lname);
        $stmtInsert->bindParam(':staffid', $staffid);
        $stmtInsert->bindParam(':gender', $gender);
        $stmtInsert->bindParam(':mstatus', $mstatus);
        $stmtInsert->bindParam(':dob', $dob);
        $stmtInsert->bindParam(':addr', $addr);
        $stmtInsert->bindParam(':email', $email);
        $stmtInsert->bindParam(':tel', $tel);
        $stmtInsert->bindParam(':position', $position);
        $stmtInsert->bindParam(':appointmentdate', $appointmentdate);
        $stmtInsert->bindParam(':passport', $passport);
        $stmtInsert->bindParam(':bankname', $bankname);
        $stmtInsert->bindParam(':contribution', $contribution);
        $stmtInsert->bindParam(':sortcode', $sortcode);
        $stmtInsert->bindParam(':acctnum', $acctnum);
        $stmtInsert->bindParam(':branch', $branch);
        $stmtInsert->bindParam(':fnokname', $fnokname);
        $stmtInsert->bindParam(':fnokphone', $fnokphone);
        $stmtInsert->bindParam(':fnokrel', $fnokrel);
        $stmtInsert->bindParam(':fnokaddr', $fnokaddr);
        $stmtInsert->bindParam(':snokname', $snokname);
        $stmtInsert->bindParam(':snokphone', $snokphone);
        $stmtInsert->bindParam(':snokrel', $snokrel);
        $stmtInsert->bindParam(':snokaddr', $snokaddr);
        $stmtInsert->bindParam(':fgname', $fgname);
        $stmtInsert->bindParam(':fgstaffid', $fgstaffid);
        $stmtInsert->bindParam(':sgname', $sgname);
        $stmtInsert->bindParam(':sgstaffid', $sgstaffid);
        $stmtInsert->bindParam(':idcard', $idcard);
        $stmtInsert->bindParam(':utilitybill', $utilitybill);
        $stmtInsert->bindParam(':pswd', $pswd);

        if ($stmtInsert->execute()) {
            echo "<script>alert('New record created successfully.');</script>";
        } else {
            echo "<script>alert('Failed to insert record into the database.');</script>";
        }
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Sahco Cooperative :: Membership Application</title>
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
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="register.php">Membership Registration</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tracking.php">Membership Tracking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Membership Login</a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="container mt-5 text-center row justify-content-center mx-auto">
        <div class="col-sm-12 img-thumbnail" style="background-color:lightgrey">
            <form method="post" action="register.php" class="needs-validated">
                <h1 class="display-6">Membership Application</h1>
                <fieldset class="form-group img-thumbnail p-2 mt-3">
                    <legend class="w-auto px-2">Personal Data</legend>
                    <div class="mt-3 input-group">
                        <span class="input-group-text">Names:</span>
                        <input type="text" id="fname" class="form-control" placeholder="First name" name="fname"
                            required>
                        <input type="text" id="lname" class="form-control" placeholder="Last name" name="lname"
                            required>
                    </div>
                    <div class="row">
                        <div class="input-group col mt-3">
                            <span class="input-group-text">Staff ID:</span>
                            <input type="text" class="form-control " id="staffid" placeholder="SAH-****" name="staffid"
                                required>
                        </div>
                        <div class="input-group col mt-3">
                            <span class="input-group-text">Gender:</span>
                            <select class="form-select" id="gender" name="gender">
                                <option type="radio" id="male" readonly>Select one option</option>
                                <option type="radio" id="male" name="male" value="m">Male</option>
                                <option type="radio" id="female" name="female" value="f">Female</option>
                                <option type="radio" id="other" name="other" value="o">Others</option>
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
                                name="dob" required>
                        </div>
                    </div>
                    <div class="input-group mt-3">
                        <span class="input-group-text">Contact address:</span>
                        <input type="" class="form-control" id="addr" placeholder="Enter the current contact address"
                            name="addr" required>
                    </div>
                    <div class="input-group mt-3">
                        <span class="input-group-text">Email address:</span>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email"
                            required>
                        <span class="input-group-text">@example.com</span>
                    </div>
                    <div class="row">
                        <div class="input-group col mt-3">
                            <span class="input-group-text">Phone number:</span>
                            <input type="tel" class="form-control" id="tel" placeholder="+2347011234567" name="tel"
                                required>
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
                                required>
                        </div>
                        <div class="input-group col mt-3">
                            <span class="input-group-text">Upload photograph:</span>
                            <input type="file" class="form-control" id="passport"
                                placeholder="Upload a passport photograph" name="passport" required>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="form-group img-thumbnail p-2 mt-3">
                    <legend class="w-auto px-2">Financials</legend>
                    <div class="input-group col mt-3">
                        <span class="input-group-text">Bank name:</span>
                        <input type="text" class="form-control" id="bankname" placeholder="Enter the bank name"
                            name="bankname" required>
                    </div>
                    <div class="row">
                        <div class="input-group col mt-3">
                            <span class="input-group-text">Monthly contribution:</span>
                            <input type="number" class="form-control" placeholder="Enter monthly contribution amount"
                                id="contribution" name="contribution" required>
                        </div>
                        <div class="input-group col mt-3">
                            <span class="input-group-text">Sort code:</span>
                            <input type="number" class="form-control" id="branch" placeholder="Enter the bank sort code"
                                name="sortcode" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-group col mt-3">
                            <span class="input-group-text">Account number:</span>
                            <input type="number" class="form-control" id="acctnum"
                                placeholder="Enter your account number" name="acctnum" required>
                        </div>
                        <div class="input-group col mt-3">
                            <span class="input-group-text">Bank Branch:</span>
                            <input type="text" class="form-control" id="branch" placeholder="Enter the bank branch"
                                name="branch" required>
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
                </fieldset>
                <fieldset class="form-group img-thumbnail p-2 mt-3">
                    <legend class="w-auto px-2">Means of Identification</legend>
                    <div class="row">
                        <div class="input-group col mt-3">
                            <span class="input-group-text">Upload your Staff ID card:</span>
                            <input type="file" class="form-control" id="idcard" name="idcard" required>
                        </div>
                        <div class="input-group col mt-3">
                            <span class="input-group-text">Utility bill:</span>
                            <input type="file" class="form-control" id="utilitybill" name="utilitybill" required>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="form-group img-thumbnail p-2 mt-3">
                    <legend class="w-auto px-2">Create Login Password:</legend>
                    <div class="row">
                        <div class="input-group col mt-3">
                            <span class="input-group-text">Create a password:</span>
                            <input type="password" class="form-control" id="pswd" name="pswd" required>
                        </div>
                        <div class="input-group col mt-3">
                            <span class="input-group-text">Confirm the password:</span>
                            <input type="password" class="form-control" id="pswd2" name="pswd2" required>
                        </div>
                    </div>
                </fieldset>
                <button type="submit" name="register" class="btn btn-success col-sm-12 mt-3 mb-3"
                    id="register">Register</button>
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
            $('#register').click(function (e) {
                //e.preventDefault();

                var valid = validateForm();
                if (valid) {
                    var formData = {
                        fname: $('#fname').val(),
                        lname: $('#lname').val(),
                        staffid: $('#staffid').val(),
                        gender: $('#gender').val(),
                        mstatus: $('#mstatus').val(),
                        dob: $('#dob').val(),
                        addr: $('#addr').val(),
                        email: $('#email').val(),
                        tel: $('#tel').val(),
                        position: $('#position').val(),
                        appointmentdate: $('#appointmentdate').val(),
                        passport: $('#passport').val(),
                        bankname: $('#bankname').val(),
                        contribution: $('#contribution').val(),
                        sortcode: $('#sortcode').val(),
                        acctnum: $('#acctnum').val(),
                        branch: $('#branch').val(),
                        fnokname: $('#fnokname').val(),
                        fnokphone: $('#fnokphone').val(),
                        fnokrel: $('#fnokrel').val(),
                        fnokaddr: $('#fnokaddr').val(),
                        snokname: $('#snokname').val(),
                        snokphone: $('#snokphone').val(),
                        snokrel: $('#snokrel').val(),
                        snokaddr: $('#snokaddr').val(),
                        fgname: $('#fgname').val(),
                        fgstaffid: $('#fgstaffid').val(),
                        sgname: $('#sgname').val(),
                        sgstaffid: $('#sgstaffid').val(),
                        idcard: $('#idcard').val(),
                        utilitybill: $('#utilitybill').val(),
                        pswd: $('#pswd').val()
                    };

                    $.ajax({
                        type: 'POST',
                        url: 'connect.php',
                        data: formData,
                        success: function (data) {
                            swal.fire({
                                'title': "Account created!",
                                'text': "Do you want to log in!",
                                'type': "warning",
                                'showCancelButton': true,
                                'confirmButtonClass': "btn-danger",
                                'confirmButtonText': "Login!",
                                'closeOnConfirm': false
                            }, function () {
                                window.location.href = 'dashboard.php';
                            });

                        },
                        error: function (data) {
                            swal.fire({
                                'title': 'Errors',
                                'text': 'There were errors while saving the data.',
                                'type': 'error'
                            })
                        }
                    });
                }
            });
        });

        function validateForm() {
            var password1 = document.getElementById("pswd").value;
            var password2 = document.getElementById("pswd2").value;

            if (password1 !== password2) {
                alert("Passwords do not match. Please try again.");
                return false;
            }
            return true;
        }
    </script>
    -->
</body>

</html>