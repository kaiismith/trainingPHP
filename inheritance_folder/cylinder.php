<?php
    include_once "Circle.php";

    class Cylinder extends Circle {
        public $height;
     
        function __construct($name, $radius, $height) {
            parent::__construct($name, $radius);
            $this->height = $height;
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