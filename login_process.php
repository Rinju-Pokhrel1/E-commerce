<?php
session_start();
if(empty($_POST['username']) || empty($_POST['password'])) {
    header("Location: login.php");
  
}
$user =$_POST['username'];
$pass =$_POST['password'];  

if($user === "admin" && $pass === "123") {
    $_SESSION['username'] = $user;
    header("Location: dashboard.php");
} else {
    header("Location: login.php");
}
?>