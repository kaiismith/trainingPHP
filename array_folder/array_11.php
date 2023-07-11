<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="array_11.php" method="post">
        TU DIEN DICH TU SO 1 DEN SO 10<br>
        Text: <input type="text" name="text"><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php

    $dict = array(
        'zero' => 'khong',
        'one' => 'mot',
        'two' => 'hai',
        'three' => 'ba',
        'four' => 'bon',
        'five' => 'nam',
        'six' => 'sau',
        'seven' => 'bay',
        'eight' => 'tam',
        'nine' => 'chin',
        'ten' => 'muoi'
    );

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $input = $_POST["text"];
    
        if (array_key_exists($input, $dict)) {
            echo $input . " => " . $dict[$input];
        }
        else {
            echo "That's not in the dictionary!";
        }
    }

?>