<?php

    function arrayToString($arr) {
        $res = '';
        for ($i=0; $i < count($arr); $i++) { 
            $res .= $arr[$i];
        }

        return $res;
    }

    function stringToArray($string) {
        $arr = [];
        for ($i=0; $i < strlen($string); $i++) { 
            $arr[$i] = $string[$i]; 
        }
        return $arr;
    }

    $aTS = arrayToString(['K', 'A', 'I']);
    echo $aTS . " = " . gettype($aTS) . "<br>";
    $sTA = stringToArray('KAI');
    echo implode(' - ', $sTA) . " = " . gettype($sTA);

?>