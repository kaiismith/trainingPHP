<?php

    /* 

    > Kiem xem a co khac khong khong.
    > tinh delta.
    > delta > 0 => 2 nghiem phan biet.
    > delta = 0 => 2 nghiem kep.
    > delta < 0 => vo nghiem.

    */

    $a = 1;
    $b = -5;
    $c = 6;

    if ($a != 0) {
        $delta = $b ** 2 - 4 * $a * $c;
        if ($delta > 0) {
            $result1 = (-$b + $delta ** 0.5) / (2 * $a);
            $result2 = (-$b - $delta ** 0.5) / (2 * $a);
            echo "RESULTS: " . $result1 . " and " . $result2;
        }
        elseif ($delta == 0) {
            $result = -$b / (2 * $a);
            echo "RESULT: " . $result;
        }
        else {
            echo "NO SOLUTION!";
        }
    }
    else {
        echo "This is not a quadratic equation!";
    }

?>