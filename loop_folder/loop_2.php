<?php

    $n = 5;
    $count = 1;
    $num_count = 0;
    $i = 2;
    $j = 2;

    while (true) {
        while ($j <= $i) {
            if ($i % $j == 0) {
                $count += 1;
            }
            if ($count > 2) {
                $isPrime = 0;
                break;
            }
            else {
                $isPrime = 1;
            }
        $j++;
        }
        $count = 1;
        if ($isPrime) {
            if ($num_count == $n) {
                break;
            }
            $num_count++;
            echo $i;
            echo "<br>";
        }
        $i++;
        $j = 2;
    }
?>