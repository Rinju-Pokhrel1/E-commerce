<?php
// session_start();
// if(empty($_POST['username']) || empty($_POST['password'])) {
//     header("Location: login.php");
  
// }
// $user =$_POST['username'];
// $pass =$_POST['password'];  

// if($user === "admin" && $pass === "123") {
//     $_SESSION['username'] = $user;
//     header("Location: dashboard.php");
// } else {
//     header("Location: login.php");
// }

session_start();
$host ="localhost";
$user="root";
$password="";
$db ="estore_db";

$con  =mysqli_connect($host ,$user ,$password,$db);
if(!$con)
    {
        die("Error". mysqli_connect_error());
    }
    echo "DATABASE CONNECTED.";
    $username =$_POST['username'];
    $pw =$_POST['password'];
    $query = "SELECT * FROM user WHERE email='$username'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
    print_r($row);
    if(password_verify($pw,$row['password']))
        {
            header("Location: dashboard.php");
            $_SESSION['email'] = $username;
        }

        
        else{
            header("Location: login.php");
        }

?>