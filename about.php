<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1>About</h1>";

        $indexedArray = [
            "Lorem ipsum dolor sit amet.",
            "Lorem ipsum dolor sit amet, consectetur adipisicing.",
            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, iusto."
        ];

        echo "<ul>";
        foreach ($indexedArray as $item) {
            echo "<li>$item</li>";
        }
        echo "</ul>";
    ?>
</body>
</html>