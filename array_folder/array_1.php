<?php

    $arr = [3, 9, 6, 5, 10, 15, 9];
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