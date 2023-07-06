<?php
    $n = 20;
    $res = 0;
    $t1 = 0;
    $t2 = 1;

    for ($i=0; $i < $n - 1; $i++) { 
        $temp = $t2;
        $t2 += $t1;
        $t1 = $temp;
        $res += $t1;
    }

    echo $res;



?>