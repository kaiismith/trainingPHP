<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="array_10.php" method="post">
        Text: <input type="text" name="text"><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $txt = preg_replace('/\s+/', '', strtolower($_POST["text"]));
        $res = "";

        for ($i = strlen($txt) - 1; $i >= 0; $i--) { 
            $res .= $txt[$i];
        }

        if ($txt == $res) {
            echo "PALINDROME!";
        }
        else {
            echo "NOT PALINDROME!";
        }
    }


    
?>