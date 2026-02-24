<!-- 5. Write a server-side script for implementing login with username and
password and redirect to welcome page if validated otherwise prints an
error. -->
<?php
$username = $_POST['username'];
$password = $_POST['password'];
if($username === "admin" && $password === "password123"){
    header("Location: welcome.php");
    exit();
} else {
    echo "Invalid username or password.";
}
?>
