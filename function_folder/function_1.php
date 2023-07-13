<?php

    $arr = array(5, 4, 3, 2, 1);
    echo "BEFORE: " . implode(' ', $arr) . "<br>";
    echo "AFTER: ";
    sort($arr);
    print_r(implode(' ', $arr));

?>
