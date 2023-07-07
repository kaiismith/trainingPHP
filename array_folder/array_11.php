<?php

    $dict = array(
        0 => 'zero',
        1 => 'one',
        2 => 'two',
        3 => 'three',
        4 => 'four',
        5 => 'five',
        6 => 'six',
        7 => 'seven',
        8 => 'eight',
        9 => 'night',
        10 => 'ten'
    );

    $input = 1;
    
    if (array_key_exists($input, $dict)) {
        echo $input . " => " . $dict[$input];
    }
    else {
        echo "That's not in the dictionary!";
    }



?>