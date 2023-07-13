<?php
    include_once "Circle.php";

    class Cylinder extends Circle {
        private $height;
     
        public function __construct($name, $radius, $height) {
            parent::__construct($name, $radius);
            $this->height = $height;
        }

        public function getHeight() {
            return $this->height;
        }

        public function calculatePerimeter()
        {
            return "You cannot use this function!";
        }

        public function calculateArea() {
            return 2 * parent::calculateArea() + 2 * pi() * $this->radius * $this->height;
        }

        public function calculateVolume() {
            return $this->calculateArea() * ($this->height);
        }
    }

?>