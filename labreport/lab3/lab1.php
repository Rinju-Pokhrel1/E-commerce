<!-- 1. Write a PHP program to handle arithmetic exception: Divide by Zero. -->
 <?php
 $numerator =10;
 $denominator =0;    
try {
    if($denominator == 0){
        throw new Exception("Division by zero is not allowed.");
    }
    $result = $numerator / $denominator;
    echo "Result: " . $result;
} catch (Exception $e) {    
    echo "Error: " . $e->getMessage();
}
?>