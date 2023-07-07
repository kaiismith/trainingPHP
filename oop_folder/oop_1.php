<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="oop_1.php" method="post">
        Length: <input type="number" name="length"><br>
        Width: <input type="number" name="width"><br>
        <input type="Submit" name="submit" value="Calculate">
    </form>
</body>
</html>

<?php

    class Rectangle {
        public $length;
        public $width;

        function __construct($length, $width) {
            $this -> length = $length;
            $this -> width = $width;
        }

        function get_length(){
            return $this -> length;
        }

        function get_width() {
            return $this -> width;
        }

        function get_area($length, $width) {
            return $length * $width;
        }

        function get_perimeter($length, $width) {
            return 2 * ($length + $width);
        }
    }

    if (isset($_POST['submit'])) {
        $length = $_POST['length'];
        $width = $_POST['width'];
        $rect = new Rectangle($length, $width);
        echo "Length: " . $rect -> get_length() . "<br>";
        echo "Width: " . $rect -> get_width() . "<br>";
        echo "Area: " . $rect -> get_area($length, $width) . "<br>";
        echo "Perimeter: " . $rect -> get_perimeter($length, $width) . "<br>";
    }

?>