<?php
// 1. FORCE ERRORS TO SHOW (This stops the 500 error and shows the real problem)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// 2. Database Connection
$host = "localhost";
$user = "root";
$pass = "";
$db   = "estore_db";

$con = mysqli_connect($host, $user, $pass, $db);

// If connection fails, it will tell you why
if (!$con) {
    die("Database Connection Failed: " . mysqli_connect_error());
}

$status_message = "";

// 3. Process the Form when button is clicked
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Get values from the HTML form names
    // mysqli_real_escape_string prevents errors with names like "O'Brian"
    $name    = mysqli_real_escape_string($con, $_POST['name']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $phone   = mysqli_real_escape_string($con, $_POST['phone']);
    $age     = mysqli_real_escape_string($con, $_POST['age']);
    $gender  = mysqli_real_escape_string($con, $_POST['gender']);

    // 4. THE SQL QUERY (Matched exactly to your screenshot capitals)
    // Table: students | Columns: Name, Address, phone, Age, Gender
    $sql = "INSERT INTO students (Name, Address, phone, Age, Gender)
            VALUES ('$name', '$address', '$phone', '$age', '$gender')";

    if (mysqli_query($con, $sql)) {
        $status_message = "<p style='color:green; font-weight:bold;'>Registration successful!</p>";
    } else {
        // If it fails, this will tell us the EXACT SQL error
        $status_message = "<p style='color:red; font-weight:bold;'>SQL Error: " . mysqli_error($con) . "</p>";
    }
}
?>