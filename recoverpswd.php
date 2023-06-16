<?php



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
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Membership Registration</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="tracking.php">Membership Tracking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Membership Login</a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="container mt-5 text-center row justify-content-center mx-auto">
        <div class="col-sm-4 ">
            <img class="img-thumbnail" width="400" height="400" src="img/tracking.jpg" alt="Sahco Logo">
        </div>
        <section>

            <!-- content -->
            <div class="">
                <!-- Register form -->
                <section class="register-form py-md-5 py-3">
                    <div class="card card_border p-md-4">
                        <div class="card-body">
                            <!-- form -->
                            <form action="#" method="GET">
                                <div class="register__header text-left mb-4">
                                    <h3 class="register__title mb-2"> Forgot Password</h3>
                                    <p>Please enter the email address for your account. A verification code will be sent
                                        to you.
                                        Once you have received the verification code, you will be able to choose a new
                                        password
                                        for your account. </p>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="input__label">Email address</label>
                                    <input type="email" class="form-control login_text_field_bg input-style"
                                        id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                </div>
                                <button type="submit" class="btn btn-primary btn-style mt-2">Send Recovery
                                    Password</button>
                            </form>
                            <!-- //form -->
                            <p class="backtohome mt-4"><a href="index-2.html" class="back"><i class="fa fa-chevron-left"
                                        aria-hidden="true"></i>Back to Home </a></p>
                            </p>
                        </div>
                    </div>
                </section>
            </div>
            <div class="container-fluid mt-5 p-4 bg-dark text-white row">
                <div class="col-sm-6">
                    <h3 class="display-6">Contact Us</h3>
                    <p class="text-white-50"><i class="fa fa-map-marker"></i> Cargo Terminal, Murtala Mohammed
                        International
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
</body>

</html>