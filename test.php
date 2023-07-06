<?php
    $n = 30;

    $dict = ['', 'mot', 'hai', 'ba', 'bon', 'nam', 'sau', 'bay', 'tam', 'chin'];
    $donVi = ['', 'tram', 'linh', 'muoi'];
    if ($n == 0) {
        echo "khong";
    }

    $result = "";
    $temp = (string)($n);

    if ($dict[(int)($temp[-1])] == 5) {
        $dict[(int)($temp[-1])]
    }
    if (strlen($temp) == 3) {
        if ($dict[(int)($temp[1])] == 0 && $dict[(int)($temp[2])] == 0) {
            $result .= $dict[(int)($temp[0])] . " ". $donVi[1];
        }
        elseif ($dict[(int)($temp[1])] == 0 && $dict[(int)($temp[2])] != 0) {
            $result .= $dict[(int)($temp[0])] . " ". $donVi[2] . " " . $dict[(int)($temp[2])];
        }
        else {
            $result .= $dict[(int)($temp[0])] . " ". $donVi[1] . " " . $dict[(int)($temp[2])];
        }
    }
    elseif (strlen($temp) == 2) {
        if ($n == 10) {
            $result .= "muoi";
        }
        elseif ($dict[(int)($temp[1])] == 0) {
            $result .= $dict[(int)($temp[0])] . " ". $donVi[3];
        }
        else {
            $result .= $dict[(int)($temp[0])] . " ". $donVi[3] . " " . $dict[(int)($temp[1])];
        }
    }
    elseif (strlen($temp) == 1) {
        if ($n == 0) {
            $result .= "khong";
        }
        else {
            $result .= $dict[(int)($temp[0])];
        }
    }

    echo $result;
?>