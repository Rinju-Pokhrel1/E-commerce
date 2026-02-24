<!-- 9. Write PHP script to demonstrate passing variables with cookies. -->
 <?php
// Set a cookie
setcookie("username", "JohnDoe", time() + (86400 * 30));
echo "Cookie 'username' has been set.<br>"; // Cookie expires in 30 days   
// Check if the cookie is set and display its value
if (isset($_COOKIE["username"])) {
    echo "Username: " . $_COOKIE["username"];
} else {
    echo "Cookie 'username' is not set.";
}
?>
