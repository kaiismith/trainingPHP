<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="array_6.php" method="post">
        <label for="numbers">Enter the numbers (E.g: 1 2 3 4 5): </label>
        <textarea name="numbers" id="numbers" rows="5" required></textarea><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php
    // SELECTION SORT
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

        for ($i = 0; $i < count($validNumbers); $i++) { 
            $minIdx = $i;
            for ($j = $i + 1; $j < count($validNumbers); $j++) { 
                if ($validNumbers[$j] < $validNumbers[$minIdx]) {
                    $minIdx = $j;
                }
            }
            $temp = $validNumbers[$minIdx];
            $validNumbers[$minIdx] = $validNumbers[$i];
            $validNumbers[$i] = $temp;
        }
    
        echo "AFTER: ";
        for ($i = 0; $i < count($validNumbers); $i++) { 
            echo $validNumbers[$i] . " ";
        }
    }    
    
?>