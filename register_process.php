<?php
$host ="localhost";
$user ="root";
$pass ="";
$db="estore_db";   
$con = mysqli_connect($host, $user, $pass, $db);
if(!$con) {
   echo "failed to connect database";
   die;
}
$fname=$_POST["first_name"];
$lname=$_POST["last_name"];
$email =$_POST["email"];
$pw =$_POST["password"];

$res=mysqli_query($con ,"insert into user(firstname,lastname,email,password)
values('$fname','$lname','$email','$pw')");
if($res) {
    echo "Registration successfully";
}
else{
    echo "Registration failed";
}
?>