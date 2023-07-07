<?php
    // BUBBLE SORT
    $arr = [3, 11, 6, 5, 10, 15, 9];

    for ($i = 0; $i < count($arr); $i++) { 
        for ($j = $i + 1; $j < count($arr) - 1; $j++) { 
            if ($arr[$j + 1] < $arr[$j]) {
                $temp = $arr[$j + 1];
                $arr[$j + 1] = $arr[$j];
                $arr[$j] = $temp;
            }
        }
    }

    for ($i = 0; $i < count($arr); $i++) { 
        echo $arr[$i] . " ";
    }
    
?>