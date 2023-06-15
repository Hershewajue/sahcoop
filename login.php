<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=sahcoop", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_POST['login'])) {
        $staffid = $_POST['staffid'];
        $pswd = $_POST['pswd'];

        $stmt = $conn->prepare("SELECT fname, pswd FROM registrations WHERE (staffid=:staffid OR email=:staffid)");
        $stmt->bindParam(':staffid', $staffid);
        $stmt->execute();

        if ($stmt->rowCount() == 1) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $storedPswd = $row['pswd'];

            if (password_verify($pswd, $storedPswd)) {
                $fname = $row['fname'];
                echo "Welcome, $fname";
            } else {
                echo "Invalid credentials";
            }
        } else {
            echo "Invalid credentials";
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
    <title>Sahco Cooperative :: Login</title>
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

    <!-- Navigations -->
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
                    <a class="nav-link" href="tracking.php">Membership Tracking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="login.php">Membership Login</a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- Login form starts here -->
    <div class="container mt-5 text-center row justify-content-center mx-auto">
        <div class="col-sm-4 ">
            <img class="img-thumbnail" width="400" height="400" src="img/login.jpg" alt="Login">
        </div>
        <div class="col-sm-8 img-thumbnail">
            <form method="post" action="login.php" class="needs-validated mx-auto">
                <h1 class="display-6 mt-4 mb-4">Login</h1>
                <div class="input-group mb-3 mt-3">
                    <span class="input-group-text">Email or Staff ID:</span>
                    <input type="text" class="form-control" id="user"
                        placeholder="Enter email or staff number (SAH-0000)" name="staffid" required>
                </div>
                <div class="input-group mt-4 mb-3">
                    <span class="input-group-text">Password:</span>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd"
                        required>
                </div>
                <div class="form-floating row">
                    <div class="form-check mb-3 col-sm-3">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember"> Remember me
                        </label>
                    </div>
                    <div class="form-floating col-sm-4">
                        <p class="form-check-label text-black-50"><a style="text-decoration: none;" href="#">Forgot
                                password?</a></p>
                    </div>
                    <div class="form-floating col-sm-5">
                        <p class="form-check-label text-black-50"><a style="text-decoration: none;"
                                href="register.php">Don't have an account? Sign up!</a></p>
                    </div>
                </div>

                <button type="submit" id="login" name="login" class="btn btn-primary col-sm-12">login</button>
            </form>
        </div>
    </div>

    <!-- Footer -->
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

    <!-- Javascripts starts here -->
    <script type="text/javascript">
        $(function () {
            $('#login').click(function (e) {
                e.preventDefault();
                var valid = this.form.checkValidity();
                if (valid) {
                    swal.fire({
                        'title': 'Hello User!',
                        'text': 'Record was submitted successfully!',
                        'type': 'success'
                    });
                } else {
                    swal.fire({
                        'title': 'Hello User!',
                        'text': 'There were some errors submitting your data',
                        'type': 'error'
                    });
                }

                var fname = $('#fname').val();
                var lname = $('#lname').val();

            });

            swal.fire({
                'title': 'Hello User!',
                'text': 'Welcome to our Login page',
                'type': 'success'
            });
        });
    </script>
</body>

</html>