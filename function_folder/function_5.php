<?php

    function deleteElement($arr, $idx) {

        $res = [];
        for ($i=0; $i < count($arr); $i++) { 
            if ($i == $idx) {
                continue;
            }
            $res[$i] = $arr[$i];
        }
        return $res;
    }

    $arr = [1, 2, 3, 4, 5];
    $idx = 3;
    echo "BEFORE: " . implode(' ', $arr) . "<br>";
    if ($idx > count($arr)) {
        echo "Your index is out of the limit!";
    }
    else {
        echo "AFTER: " . implode(' ', deleteElement($arr, $idx));
    }
    
?>