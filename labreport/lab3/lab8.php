<!-- 8. Write SQL code to create database, table and add one column of table. -->
 <?php
 $host = "localhost";
$user = "root";
$pass = "";
$db   = "estore_db";

$con = mysqli_connect($host, $user, $pass, $db);
// check connection
if (!$con) {
    die("Database connection failed");
}
// Create database
$sql = "CREATE DATABASE IF NOT EXISTS estore_db";
if (mysqli_query($con, $sql)) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . mysqli_error($con) . "<br>";
}
// Create table
$sql = "CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    price DECIMAL(10, 2) NOT NULL
)";
if (mysqli_query($con, $sql)) {
    echo "Table created successfully<br>";
} else {
    echo "Error creating table: " . mysqli_error($con) . "<br>";
}
// Add column
$sql = "ALTER TABLE products ADD COLUMN description TEXT";
if (mysqli_query($con, $sql)) {
    echo "Column added successfully<br>";
} else {    
    echo "Error adding column: " . mysqli_error($con) . "<br>";
}
mysqli_close($con);
?>