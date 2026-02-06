<!DOCTYPE html>
<html>
<head>
    <title>eStore: <?php echo isset($page_title) ? $page_title : 'Homepage'; ?></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="header">
        <div id="logo">
            <img src="images/logo.png" title="eStore">
        </div>
        <div id="navbar">
            <a href="index.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="contact.php">Contact</a>
            <a href="products.php">Products</a>
        </div>
        <div id="login_reg_panel">
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
        </div>
    </div>
