<?php

    function someCalculation($arr) {
        
        $total = 0;
        $max = $arr[0];
        $min = $arr[0];

        for ($i = 0; $i < count($arr); $i++) { 
            if ($arr[$i] > $max) {
                $max = $arr[$i];
            }
            if ($arr[$i] < $min) {
                $min = $arr[$i];
            }
            $total += $arr[$i];
        }
        return [$total, $max, $min];
    }

    $arr = [5, 4, 3, 2, 1];
    $res = someCalculation($arr);

    echo "ARRAY: " . implode(' ', $arr) . "<br>";
    echo "TOTAL: " . $res[0] . "<br>";
    echo "MAX: " . $res[1] . "<br>";
    echo "MIN: ". $res[2] . "<br>";

?>