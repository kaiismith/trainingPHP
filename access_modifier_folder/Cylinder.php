<?php
    include_once "Circle.php";

    class Cylinder extends Circle {
        private $height;
     
        function __construct($name, $radius, $height) {
            parent::__construct($name, $radius);
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