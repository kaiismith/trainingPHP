<?php

    function cutString($string, $pos) {
        $string1 = "";
        $string2 = "";
        
        for ($i=0; $i < strlen($string); $i++) { 
            if ($i < $pos) {
                $string1 .= $string[$i];
            }
            else {
                $string2 .= $string[$i];
            }
        }

        return [$string1, $string2];
    }

    $text = "HELLO WORLD!";
    $pos = 5;
    $res = cutString($text, $pos);
    echo "BEFORE: " . $text . "<br>";
    if ($pos > strlen($text)) {
        echo "Your position is out of the limit!";
    }
    else {
        echo "AFTER: " . $res[0] . " and " . $res[1];
    }

?>