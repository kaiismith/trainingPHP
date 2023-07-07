<?php

    $a = "aaabbacccdeeeaaaa";
    $temp = $a[0];
    $count = 1;
    $res = "";

    for ($i = 1; $i < strlen($a); $i++) { 
        if ($a[$i] != $temp) {
            $res .= $temp . $count;
            $count = 0;
            $temp = $a[$i];
        }
        $count++;
    }
    $res .= $temp . $count;
    echo $res;

?>