<?php
    include_once "Rectangle.php";

    class Rectangular extends Rectangle {
        public $height;
     
        public function __construct($name, $length, $width, $height) {
            parent::__construct($name, $length, $width);
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
            return 2 * parent::calculateArea() + 2 * (parent::calculatePerimeter()) * $this->height;
        }

        public function calculateVolume() {
            return $this->calculateArea() * ($this->height);
        }
    }

?>