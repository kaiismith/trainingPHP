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
            return 2 * parent::calculateArea() + 2 * pi() * $this->radius * $this->height;
        }

        function calculateVolume() {
            return $this->calculateArea() * ($this->height);
        }
    }

?>