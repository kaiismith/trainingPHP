<?php

    function bubbleSort($arr) {

        for ($i = 0; $i < count($arr); $i++) { 
            for ($j = $i + 1; $j < count($arr); $j++) { 
                if ($arr[$j] < $arr[$i]) {
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$i];
                    $arr[$i] = $temp;
                }
            }
        }

        return $arr;
    }

    $arr = [5, 4, 3, 2, 1];
    echo "BEFORE: " . implode(' ', $arr) . "<br>";
    echo "AFTER: ";
    print_r(implode(' ', bubbleSort($arr)));

?>
