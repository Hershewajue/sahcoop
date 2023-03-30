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
        $remember = $_POST['remember'];

        $sql = "INSERT INTO table1 (uname, pswd, remember) VALUES ($uname, $pswd, $remember)";
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
</head>

<body>
    <div>
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
                <input class="form-check-input" type="checkbox" id="myCheck" name="remember" value="t" required>
                <label class="form-check-label" for="myCheck">I agree on blabla.</label>
            </div>
            <button type="submit" name="submit2" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>