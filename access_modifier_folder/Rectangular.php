<?php
    include_once "Rectangle.php";

    class Rectangular extends Rectangle {
        public $height;
     
        function __construct($name, $length, $width, $height) {
            parent::__construct($name, $length, $width);
            $this->height = $height;
        }

        public function getHeight() {
            return $this->height;
        }

        function calculatePerimeter()
        {
            return "You cannot use this function!";
        }

        function calculateArea() {
            return parent::calculateArea();
        }

        function calculateVolume() {
            return $this->calculateArea() * ($this->height);
        }
    }

?>