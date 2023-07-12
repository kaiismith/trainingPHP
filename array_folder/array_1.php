<?php

    $start = 0;
    $end = 100;
    $step = 10;
    $random_number_range = range($start, $end);
    shuffle($random_number_range);
    $arr = array_slice($random_number_range, 0, $step);

    echo "ARRAY: ";
    for ($i=0; $i < count($arr); $i++) { 
        echo $arr[$i] . " ";
    }
    echo "<br>";

    $max = $arr[0];
    $min = $arr[0];

    for ($i = 0; $i < count($arr); $i++) { 
        if ($arr[$i] > $max) {
            $max = $arr[$i];
        }
        if ($arr[$i] < $min) {
            $min = $arr[$i];
        }
    }

    echo "MAX: " . $max;
    echo "<br>";
    echo "MIN: " . $min;

?>