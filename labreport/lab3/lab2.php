<!-- 2. Write a PHP script to demonstrate use of arithmetic operators, comparison
operators, and logical operators. -->

<?php
// Arithmetic Operators 
$a = 10;
$b = 5;
echo "Addition: " . ($a + $b) . "<br>";
echo "Subtraction: " . ($a - $b) . "<br>";
echo "Multiplication: " . ($a * $b) . "<br>";
echo "Division: " . ($a / $b) . "<br>";
echo "Modulus: " . ($a % $b) . "<br>";
 
// Comparison Operators
$x = 10;
$y = 20;        
echo "Equal to: " . ($x == $y) . "<br>";
echo "Not equal to: " . ($x != $y) . "<br>";
echo "Greater than: " . ($x > $y) . "<br>";

// Logical Operators
$p = true;
$q = false;
echo "Logical AND: " . ($p && $q) . "<br>";
echo "Logical OR: " . ($p || $q) . "<br>";
echo "Logical NOT: " . (!$p) . "<br>";
?>
