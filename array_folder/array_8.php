<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="array_8.php" method="post">
        Text: <input type="text" name="text"><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $a = $_POST["text"];
        $temp = $a[0];
        $count = 1;
        $res = "";

        echo "BEFORE: " . $a . "<br>";

        for ($i = 1; $i < strlen($a); $i++) { 
            if ($a[$i] != $temp) {
                $res .= $temp . $count;
                $count = 0;
                $temp = $a[$i];
            }
            $count++;
        }
        $res .= $temp . $count;
        echo "AFTER: " . $res;
    }

    

?>