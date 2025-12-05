<?php

echo "<p>Hello " . htmlspecialchars($_POST["name"]) . "!</p>";
echo "<p>Email: " . htmlspecialchars($_POST["email"]) . "</p>";
echo "<p>Response: " . htmlspecialchars($_POST["rate"]) . "</p>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/contact.php">Return</a>
</body>
</html>
