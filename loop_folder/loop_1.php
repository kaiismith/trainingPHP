<?php

    for ($i=0; $i < 3; $i++) { 
        for ($j=0; $j < 7; $j++) { 
            echo "*";
        }
        echo "<br>";
    }

    echo "<br>";

    for ($i=1; $i < 6; $i++) { 
        for ($j=1; $j < $i + 1; $j++) { 
            echo "*";
        }
        echo "<br>";
    }

    echo "<br>";

    // HEART
    for ($i=0; $i < 6; $i++) { 
        for ($j=0; $j < 7; $j++) { 
            if ($i == 0 && $j % 3 != 0 || $i == 1 && $j % 3 == 0 || $i - $j == 2 || $i + $j == 8) {
                echo "*";
            }
            else {
                echo "&nbsp;&nbsp;";
            }
        }
        echo "<br>";
    }


?>