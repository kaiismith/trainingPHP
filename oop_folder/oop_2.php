<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="oop_2.php" method="post">
        a: <input type="number" name="a"><br>
        b: <input type="number" name="b"><br>
        c: <input type="number" name="c"><br>
        <input type="Submit" name="submit" value="Calculate">
    </form>
</body>
</html>

<?php

    class QuadracticEquation {
        private $a;
        private $b;
        private $c;

        public function getA() {
            return $this -> a;
        }

        public function getB() {
            return $this -> b;
        }

        public function getC() {
            return $this -> c;
        }

        public function __construct($a, $b, $c) {
            $this -> a = $a;
            $this -> b = $b;
            $this -> c = $c;
        }

        public function calculateDelta() {
            return ($this -> b ** 2) - 4 * ($this -> a) * ($this -> c);
        }

        public function getRoot1() {
            return (-($this -> b) + ($this -> calculateDelta() ** 0.5)) / (2 * ($this -> a));
        }

        public function getRoot2() {
            return (-($this -> b) - ($this -> calculateDelta() ** 0.5)) / (2 * ($this -> a));
        }
    }

    if (isset($_POST['submit'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];

        $equ = new QuadracticEquation($a, $b, $c);
        if ($equ -> calculateDelta() >= 0) {
            echo "x1: " . $equ -> getRoot1() . "<br>";
            echo "x2: " . $equ -> getRoot2() . "<br>";
        }
        else {
            echo "NO SOLUTION!";
        }
    }

?>

