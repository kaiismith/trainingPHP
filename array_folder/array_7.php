<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="array_7.php" method="post">
        <label for="size"> Enter the size of the matrix: </label>
        <input type="number" name="size" id="size" min="1" required><br>
        <label for="numbers">Enter the numbers (E.g: 1 2 3 4 5): </label>
        <textarea name="numbers" id="numbers" rows="5" required></textarea><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $size = $_POST["size"];
        $numbers = $_POST["numbers"];
        $arr = preg_split('/\s+/', $numbers);

        if ($size <= 0) {
            echo "Size of the matrix must be greater than 0! <br>";
            exit;
        }
        
        $validNumbers = [];
        foreach ($arr as $number) {
            if (is_numeric($number)) {
                $validNumbers[] = (int) $number;
            }
        }

        if (count($validNumbers) != ($size ** 2)) {
            echo "Number of entered elements is invalid! <br>";
            exit;
        }

        $matrix = [];
        $idx = 0;
        for ($i = 0; $i < $size; ++$i) {
            for ($j = 0; $j < $size; ++$j) {
                $matrix[$i][$j] = (int) $validNumbers[$idx];
                $idx++;
            }
        }

        echo "ARRAY: <br>";
        for ($i = 0; $i < $size; $i++) {
            for ($j = 0; $j < $size; $j++) {
                echo $matrix[$i][$j] . " ";
            }
            echo "<br>";
        }
        echo "<br>";

        $res = 0;
        for ($i=0; $i < count($matrix); $i++) { 
            $res += $matrix[$i][$i] + $matrix[$i][count($matrix) - $i - 1];
        }
        echo "RESULT: " . $res;
    }    

?>