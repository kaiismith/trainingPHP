<?php
    $a = 1;
    $b = 2;
    $operator = '+';
    $res = '';

    switch ($operator) {
        case '+':
            $res = $a + $b;
            break;
        case '-':
            $res = $a - $b;
            break;
        case '*':
            $res = $a * $b;
            break;
        case '/':
            $res = $a - $b;
            break;
        default:
            echo "INVALID OPERATOR";
            break;
    }

    echo $res;
?>
