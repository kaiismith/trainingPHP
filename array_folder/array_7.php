<?php

    $start = 0;
    $end = 10;
    $size = 3;
    $step = $size * $size;
    $random_number_range = range($start, $end);
    shuffle($random_number_range);
    
    $arr = array_slice($random_number_range, 0, $step);
    $arr = array_chunk($arr, $size);

    echo "ARRAY: <br>";
    for ($i=0; $i < count($arr); $i++) { 
        for ($j=0; $j < count($arr); $j++) { 
            echo $arr[$i][$j] . " ";
        }
        echo "<br>";
    }
    echo "<br>";
    
    $res = 0;

    for ($i=0; $i < count($arr); $i++) { 
        $res += $arr[$i][$i] + $arr[$i][count($arr) - $i - 1];
    }

    echo "RESULT: " . $res;

?>