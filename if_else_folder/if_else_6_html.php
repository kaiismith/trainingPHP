<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="if_else_6_html.php" method="post">
        Number 1: <input type="number" name="n1"><br>
        Number 2: <input type="number" name="n2"><br>
        Operator: <input type="text" name="operator"><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $a = $_POST["n1"];
        $b = $_POST["n2"];
        $operator = $_POST["operator"];
        $res = '';

        switch ($operator) {
            case '+':
                $res = $a + $b;
                break;
            case '-':
                $res = $a - $b;
                break;
            case '*':
                $res = $a * $b;
                break;
            case '/':
                $res = $a - $b;
                break;
            default:
                echo "INVALID OPERATOR!";
                break;
        }
    
        echo $res;
    }
?>
