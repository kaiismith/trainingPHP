<?php

    /*

    BIG O HOI TO :)))) BUT IT WORKS
    
    SU DUNG QUY TAC DUOI DAY:
    > 00 -> 02
    > 01 -> 12
    > 02 -> 22

    > 10 -> 01
    > 11 -> 11
    > 12 -> 21

    > 20 -> 00
    > 21 -> 10
    > 22 -> 20

     */

    $arr = [[2, 4, 3], [5, 3, 7], [5, 1, 2]];
    $res = [];
    $n = 1;

    for ($k = 0; $k < $n; $k++) { 
        for ($i = 0; $i < count($arr); $i++) { 
            for ($j = 0; $j < count($arr); $j++) { 
                if ($i == 0) {
                    $res[$j][2] = $arr[$i][$j]; 
                }
                elseif ($i == 1) {
                    $res[$j][1] = $arr[$i][$j];
                }
                elseif ($i == 2) {
                    $res[$j][0] = $arr[$i][$j];
                }
            }
        }
        $arr = $res;
    }

    for ($i=0; $i < count($arr); $i++) { 
        for ($j=0; $j < count($arr); $j++) { 
            echo $arr[$i][$j] . " ";
        }
        echo "<br>"; 
    }
?>