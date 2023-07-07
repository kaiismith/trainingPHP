<?php

    // INSERTION SORT
    $arr = [3, 11, 6, 5, 10, 15, 9];

    for ($i = 1; $i < count($arr); $i++) { 
        $key = $arr[$i];
        $j = $i - 1;
        while ($j >= 0 && $key < $arr[$j]) {
            $arr[$j + 1] = $arr[$j];
            $j -= 1;
        $arr[$j + 1] = $key;
        }
    }

    for ($i=0; $i < count($arr); $i++) { 
        echo $arr[$i];
        echo "<br>";
    }
    
?>