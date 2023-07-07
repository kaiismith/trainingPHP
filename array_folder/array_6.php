<?php
    // SELECTION SORT
    $arr = [3, 11, 6, 5, 10, 15, 9];

    for ($i=0; $i < count($arr); $i++) { 
        $minIdx = $i;
        for ($j = $i + 1; $j < count($arr); $j++) { 
            if ($arr[$j] < $arr[$minIdx]) {
                $minIdx = $j;
            }
        }
        $temp = $arr[$minIdx];
        $arr[$minIdx] = $arr[$i];
        $arr[$i] = $temp;
    }

    for ($i = 0; $i < count($arr); $i++) { 
        echo $arr[$i] . " ";
    }
    
?>