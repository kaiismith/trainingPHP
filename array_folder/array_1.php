<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="array_1.php" method="post">
        <label for="numbers">Enter the numbers (E.g: 1 2 3 4 5): </label>
        <textarea name="numbers" id="numbers" rows="5" required></textarea>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $numbers = $_POST["numbers"];
        $arr = preg_split('/\s+/', $numbers);
        
        $validNumbers = [];
        foreach ($arr as $number) {
            if (is_numeric($number)) {
                $validNumbers[] = (int) $number;
            }
        }

        echo "ARRAY: ";
        foreach ($validNumbers as $number) {
            echo $number . " ";
        }
        echo "<br>";

        $max = $validNumbers[0];
        $min = $validNumbers[0];

        for ($i = 0; $i < count($validNumbers); $i++) { 
            if ($validNumbers[$i] > $max) {
                $max = $validNumbers[$i];
            }
            if ($validNumbers[$i] < $min) {
                $min = $validNumbers[$i];
            }
        }

        echo "MAX: " . $max . "<br>";
        echo "MIN: " . $min;
    }

?>