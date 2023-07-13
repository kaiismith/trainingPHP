<?php
    include_once "Rectangle.php";

    class Rectangular extends Rectangle {
        public $height;
     
        function __construct($name, $length, $width, $height) {
            parent::__construct($name, $length, $width);
            $this->height = $height;
        }

        function calculatePerimeter()
        {
            return "You cannot use this function!";
        }

        function calculateArea() {
            return 2 * parent::calculateArea() + 2 * (parent::calculatePerimeter()) * $this->height;
        }

        function calculateVolume() {
            return $this->calculateArea() * ($this->height);
        }
    }

?>