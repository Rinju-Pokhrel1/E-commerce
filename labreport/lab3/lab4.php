<!-- 4. Write a server-side program to read a file and display the content using
table. -->
<?php
$filename ="data.txt";
if(file_exists($filename)){
    $file =fopen($filename,"r");
    echo "<table border='1'>";
    echo "<tr><th>Line Number</th><th>Content</th></tr>";
    $lineNumber = 1;
    while(!feof($file)){
        $line = fgets($file);
        echo "<tr><td>" . $lineNumber . "</td><td>" . htmlspecialchars($line) . "</td></tr>";
        $lineNumber++;      
    }
    fclose($file);
    echo "</table>";
} else {
    echo "File does not exist.";
}
?>

