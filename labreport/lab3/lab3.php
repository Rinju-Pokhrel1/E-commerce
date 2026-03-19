<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Display Data</title>
</head>
<body>

<h2>Form Submitted Successfully!</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Use htmlspecialchars to prevent XSS
    // 2. Use ?? to prevent "Undefined Index" errors if fields are left blank
    $name = htmlspecialchars($_POST['name'] ?? 'Not provided');
    $gender = htmlspecialchars($_POST['gender'] ?? 'Not selected');
    $country = htmlspecialchars($_POST['country'] ?? 'Not selected');

    echo "Name: " . $name . "<br>";
    echo "Gender: " . $gender . "<br>";

    if (!empty($_POST['hobbies']) && is_array($_POST['hobbies'])) {
        // Sanitize each item in the array
        $safe_hobbies = array_map('htmlspecialchars', $_POST['hobbies']);
        echo "Hobbies: " . implode(", ", $safe_hobbies) . "<br>";
    } else {
        echo "Hobbies: None<br>";
    }

    echo "Country: " . $country . "<br>";
} else {
    echo "Please submit the form first.";
}
?>

</body>
</html>