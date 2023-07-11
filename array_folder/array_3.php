<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="array_3.php" method="post">
        Text: <input type="text" name="text"><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $text = $_POST["text"];
        $res = "";

        echo "BEFORE: " . $text . "<br>";

        for ($i = strlen($text) - 1; $i >= 0; $i--) { 
            $res .= $text[$i];
        }
    
        echo "AFTER: " . $res;
    }
  
?>