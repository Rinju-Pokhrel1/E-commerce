<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "estore_db";

$con = mysqli_connect($host, $user, $pass, $db);

if (!$con) {
    die("Database connection failed");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name    = $_POST['name'];
    $address = $_POST['address'];
    $phone   = $_POST['phone'];
    $age     = $_POST['age'];
    $gender  = $_POST['gender'];

    $sql = "INSERT INTO students (name, address, phone, age, gender)
            VALUES ('$name', '$address', '$phone', '$age', '$gender')";

    $res = mysqli_query($con, $sql);

    if ($res) {
        echo "<p style='color:green;'>Registration successful</p>";
    } else {
        echo "<p style='color:red;'>Registration failed</p>";
    }
}

mysqli_close($con);
?>