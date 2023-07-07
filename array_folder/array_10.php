<?php

    $txt = strtolower("anna");
    $res = "";

    for ($i = strlen($txt) - 1; $i >= 0; $i--) { 
        $res .= $txt[$i];
    }

    if ($txt == $res) {
        echo "PALINDROME!";
    }
    else {
        echo "NOT PALINDROME!";
    }
?>