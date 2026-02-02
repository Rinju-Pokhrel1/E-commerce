
<!DOCTYPE html>
<html>

<head>

    <title>eStore: Homepage</title>
    <link rel="stylesheet" type="text/css" href="assets/style.css">
</head>

<body>
    <div id="header">
        <div id="logo">
            <img src="assets/images/logo.png" title="eStore">
        </div>
        <div id="navbar">
            <a href="index.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="contact.php">Contact</a>
            <a href="products.php">Products</a>
        </div>
        <div id="login_reg_panel">
            <?php
            if(empty($_SESSION['username'])) {
            ?>
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
<?php }
else{?>
            
            <a href="logout.php">Logout</a>
        <?php } ?>
        </div>
    </div>