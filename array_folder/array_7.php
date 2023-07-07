<?php

    $arr = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
    $res = 0;

    for ($i=0; $i < count($arr); $i++) { 
        $res += $arr[$i][$i] + $arr[$i][count($arr) - $i - 1];
    }
    
    echo $res;

?>