<?php



?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Sahco Cooperative :: Home</title>
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
            <ul class="navbar-nav text-white">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Membership Registration</a>
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
    <div class="container-fluid text-center">
        <!-- Carousel -->
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/loan.png" alt="Loan picture" class="d-block" style="width:100%; height: 600px;">
                </div>
                <div class="carousel-item">
                    <img src="img/bags of rice.jpg" alt="Picture of bags of rice" class="d-block" style="width:100%; height: 600px;">
                </div>
                <div class="carousel-item">
                    <img src="img/cow-sheep-goat.png" alt="Picture of cow-sheep-goat" class="d-block" style="width:100%; height: 600px;">
                </div>
                <div class="carousel-item">
                    <img src="img/groundnut oil.jpg" alt="Picture of groundnut oil" class="d-block" style="width:100%; height: 600px;">
                </div>
            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-sm-3">
                <h3 class="display-6">Quick Links</h3>
                <li class="nav-link"><a style="text-decoration:none; font-size:1.2em;" href="login.php"><i class='fa fa-angle-right'></i> Members Login here</a></li>
                <li class="nav-link"><a style="text-decoration:none; font-size:1.2em;" href="register.php"><i class='fa fa-angle-right'></i> Register as a member</a></li>
                <li class="nav-link"><a style="text-decoration:none; font-size:1.2em;" href="tracking.php"><i class='fa fa-angle-right'></i> Track your registration progress</a></li>
            </div>
            <div class="col-sm-9">
                <h2 class="display-6">Press Release</h2>
                <h5>Introduction, Mar 7, 2023</h5>
                <p class="text-black-50">It gives me great joy as the MD/CEO to share an insight into what stands us
                    out in terms of commitment and professionalism making SAHCO, the preferred ground handler of
                    choice in the West Africa sub-region.
                    Skyway Aviation Handling Company Plc (SAHCO) is the leading airport and aviation service
                    provider offering a comprehensive range of services in terms of quality reliability, innovation
                    and network coverage in Nigeria. It is a premium Ground Handling Company and a leading player in
                    the aviation in Nigeria.
                </p>

                <h2 class="mt-5 display-6">Our Services</h2>
                <h5>What you need to know, Jan 12, 2023</h5>
                <p class="text-black-50">Globally known for our ability to handle every last detail of our
                    customers's particular logistics and forwarding needs, SAHCOL Special Services team takes care
                    of all your
                    logistics.</p>
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
</body>

</html>