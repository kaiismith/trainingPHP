<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="if_else_5_html.php" method="post">
        Number: <input type="number" name="number"><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php

    /*
    
    > Luu chu cai vao 1 array.
    > Chuyen n tu int thanh string.
    
    B1: Kiem tra xem so 5 o cuoi voi dieu kien phai la so co 2 chu so tro len va trong truong hop co 3 chu so thi chu so thu 2 khac ko (VD: 115).
    B2: Truong hop so co 3 chu so:
        TH1: Cac so nhu 100, 200 => mot tram, hai tram,...
        TH2: Cac so nhu 105, 203 => mot tram linh nam, hai tram linh ba,... 
        TH3: Nhung so con lai. 315 => ba tram muoi lam, 325 => ba tram hai muoi lam,... 
    B3: Truong hop so co 2 chu so:
        TH1: 10 <= n <= 19 | 15, 11 => muoi lam, muoi mot,... 
        TH2: Cac so con lai | 23, 24 => hai ba, hai tu,... 
    B4: Truong hop so co 1 chu so
        0 => khong, 1 => mot,... 

    [!] Su dung phuong phap index cua array.
    
    */

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $n = $_POST["number"];
        if ($n < 0) {
            echo "Number must be greater or equal than zero!";
            exit;
        }

        $dict = ['', 'mot', 'hai', 'ba', 'bon', 'nam', 'sau', 'bay', 'tam', 'chin'];
        $donVi = ['', 'tram', 'linh', 'muoi'];
    
        $result = "";
        $temp = (string)($n);
    
        // if ((int)($temp[-1]) == 5 && strlen($temp) > 1 && (int)($temp[-2]) != 0) {
        //     $dict[(int)($temp[-1])] = "lam";
        // }
        if (strlen($temp) == 3) {
            if ((int)($temp[1]) == 0 && (int)($temp[2]) == 0) {
                $result .= $dict[(int)($temp[0])] . " ". $donVi[1];
            }
            elseif ((int)($temp[1]) == 0 && (int)($temp[2]) != 0) {
                if ((int)($temp[2]) == 5) {
                    $result .= $dict[(int)($temp[0])] . " ". $donVi[1] . " " . $donVi[2] . " " . "nam";
                }
                else {
                    $result .= $dict[(int)($temp[0])] . " ". $donVi[1] . " " . $donVi[2] . " " . $dict[(int)($temp[2])];
                }
            }
            elseif ((int)($temp[2]) == 5) {
                if ((int)($temp)[1] == 1) {
                    $result .= $dict[(int)($temp[0])] . " ". $donVi[1] . " " . $donVi[3] . " " . "lam";
                }
                else {
                    $result .= $dict[(int)($temp[0])] . " ". $donVi[1] . " " . $dict[(int)($temp[1])] . " " . $donVi[3] . " " . "lam";
                }
            }
            else {
                if ((int)($temp)[1] == 1) {
                    $result .= $dict[(int)($temp[0])] . " ". $donVi[1] . " " . $donVi[3] . " " . $dict[(int)($temp[2])];
                }
                else {
                    $result .= $dict[(int)($temp[0])] . " ". $donVi[1] . " " . $dict[(int)($temp[1])] . " " . $donVi[3] . " " . $dict[(int)($temp[2])];
                }
                
            }
        }
        elseif (strlen($temp) == 2) {
            if ($n >= 10 && $n <= 19) {
                if ($n == 15) {
                    $result .= "muoi" . " " . "lam";
                }
                else {
                    $result .= "muoi" . " " . $dict[(int)($temp[1])];
                }
            }
            else {
                if ((int)($temp[1]) != 5) {
                    $result .= $dict[(int)($temp[0])] . " ". $donVi[3] . " " . $dict[(int)($temp[1])];
                }
                elseif ((int)($temp[1]) == 5) {
                    $result .= $dict[(int)($temp[0])] . " ". $donVi[3] . " " . "lam";
                }
                
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
    }
    
?>