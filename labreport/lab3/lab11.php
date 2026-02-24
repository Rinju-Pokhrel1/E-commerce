<!-- 11. Write a PHP script to demonstrate passing variables through a URL. -->
<?php
if (isset($_GET['name']) && isset($_GET['age'])) {
    $name = $_GET['name'];
    $age = $_GET['age'];    
    echo "Name: " . htmlspecialchars($name) . "<br>";
    echo "Age: " . htmlspecialchars($age);
} else {
    echo "Please provide 'name' and 'age' parameters in the URL.";
}
?>
