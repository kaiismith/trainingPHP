<?php
    // BUBBLE SORT
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

    for ($i = 0; $i < count($arr); $i++) { 
        for ($j = $i + 1; $j < count($arr); $j++) { 
            if ($arr[$j] < $arr[$i]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$i];
                $arr[$i] = $temp;
            }
        }
    }

    echo "AFTER: ";
    for ($i = 0; $i < count($arr); $i++) { 
        echo $arr[$i] . " ";
    }

?>