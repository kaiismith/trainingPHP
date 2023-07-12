<?php

    // INSERTION SORT
    $start = 0;
    $end = 100;
    $step = 10;
    $random_number_range = range($start, $end);
    shuffle($random_number_range);
    $arr = array_slice($random_number_range, 0, $step);

    echo "BEFORE: ";
    for ($i=0; $i < count($arr); $i++) { 
        echo $arr[$i] . " ";
    }
    echo "<br>";

    for ($i = 1; $i < count($arr); $i++) { 
        $key = $arr[$i];
        $j = $i - 1;
        while ($j >= 0 && $key < $arr[$j]) {
            $arr[$j + 1] = $arr[$j];
            $j -= 1;
        $arr[$j + 1] = $key;
        }
    }

    echo "AFTER: ";
    for ($i=0; $i < count($arr); $i++) { 
        echo $arr[$i] . " ";
    }

?>