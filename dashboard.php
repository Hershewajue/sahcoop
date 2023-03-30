<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=sahcoop", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";

    if (isset($_POST['submit2'])) {
        $uname = $_POST['uname'];
        $pswd = $_POST['pswd'];
        $remb = $_POST['remb'];

        $sql = "INSERT INTO table1 (uname, pswd, remb) VALUES ($uname, $pswd, $remb)";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "New record created successfully";
    }
} catch (PDOException $e) {
    echo "New record wasn't created.<br>" . $e->getMessage();
}


$conn = null;

?>

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
    <div class="container">
        <form method="post" action="dashboard.php" class="was-validated">
            <div class="mb-3 mt-3">
                <label for="uname" class="form-label">Username:</label>
                <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" id="myCheck" name="remb" value="t" required>
                <label class="form-check-label" for="myCheck">I agree on blabla.</label>
            </div>
            <button type="submit" name="submit2" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>