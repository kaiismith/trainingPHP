<?php
    $year = 2024;

    if ($year > 0) {
        if ($year % 400 == 0 || ($year % 4 == 0 && $year % 100 != 0)) {
            echo "Leap year!";
        }
        else {
            echo "NOT Leap year!";
        }
    }
    else {
        echo "INVALID YEAR!";
    }

    

?>