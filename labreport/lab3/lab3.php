<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Display Data</title>
</head>
<body>

<h2>Form Submitted Successfully!</h2>

<?php
echo "Name: " . $_POST['name'] . "<br>";
echo "Gender: " . $_POST['gender'] . "<br>";

if (!empty($_POST['hobbies'])) {
    echo "Hobbies: " . implode(", ", $_POST['hobbies']) . "<br>";
} else {
    echo "Hobbies: None<br>";
}

echo "Country: " . $_POST['country'] . "<br>";
?>

</body>
</html>