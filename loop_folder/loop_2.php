<?php

    $n = 10;
    $count = 1;

    for ($i = 2; $i <= $n; $i++) { 
        for ($j = 2; $j <= $n; $j++) { 
            if ($i % $j == 0) {
                $count++;
            }
            if ($count > 2) {
                $isPrime = 0;
                break;
            }
            else {
                $isPrime = 1;
            }
        }
        $count = 1;
        # echo $isPrime;
        
        if ($isPrime) {
            echo $i;
        }
    }


?>