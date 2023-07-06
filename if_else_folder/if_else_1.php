<?php

    /*

    > Kiem tra co thoa man dieu kien de la 1 tam giac khong.
    > Tam giac deu, tam giac vuong can, tam giac vuong can, tam giac vuong, tam giac thuong.

    */

    $a = 3;
    $b = 4;
    $c = 5;

    if ($a + $b > $c || $b + $c > $a || $c + $a > $b) {
        if ($a == $b && $b == $c) {
            echo "Equilateral Triangle";
        }
        elseif ($a == $b || $b == $c || $c == $a) {
            if ($a ** 2 + $b ** 2 == $c ** 2 || $b ** 2 + $c ** 2 == $a ** 2 || $c ** 2 + $a ** 2 == $b ** 2) {
                echo "Isosceles Right Triangle";
            }
            else {
                echo "Isosceles Triangle";
            }
        }
        elseif ($a ** 2 + $b ** 2 == $c ** 2 || $b ** 2 + $c ** 2 == $a ** 2 || $c ** 2 + $a ** 2 == $b ** 2) {
            echo "Right Triangle";
        }
        else {
            echo "Normal Triangle";
        }
    }
    else {
        echo "Not a Triangle";
    }
?>