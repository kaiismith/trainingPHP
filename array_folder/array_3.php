<?php

    $text = "Hello World";
    $res = '';

    for ($i = strlen($text) - 1; $i >= 0; $i--) { 
        $res .= $text[$i];
    }

    echo $res;
    
?>