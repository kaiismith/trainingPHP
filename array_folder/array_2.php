<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="array_2.php" method="post">
        <label for="numbers">Enter the numbers (E.g: 1 2 3 4 5): </label>
        <textarea name="numbers" id="numbers" rows="5" required></textarea><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php

    // INSERTION SORT
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $numbers = $_POST["numbers"];
        $arr = preg_split('/\s+/', $numbers);
        
        $validNumbers = [];
        foreach ($arr as $number) {
            if (is_numeric($number)) {
                $validNumbers[] = (int) $number;
            }
        }

        echo "BEFORE: ";
        foreach ($validNumbers as $number) {
            echo $number . " ";
        }
        echo "<br>";
    
        for ($i = 1; $i < count($validNumbers); $i++) { 
            $key = $validNumbers[$i];
            $j = $i - 1;
            while ($j >= 0 && $key < $validNumbers[$j]) {
                $validNumbers[$j + 1] = $validNumbers[$j];
                $j -= 1;
            $validNumbers[$j + 1] = $key;
            }
        }
    
        echo "AFTER: "; 
        for ($i=0; $i < count($validNumbers); $i++) { 
            echo $validNumbers[$i] . " ";
        }
    }   
    
?>