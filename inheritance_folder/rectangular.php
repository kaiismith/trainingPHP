<?php
    include_once "rectangle.php";

    class Rectangular extends Rectangle {
        public $height;
     
        function __construct($name, $length, $width, $height) {
            $this->name = $name;
            $this->length = $length;
            $this->width = $width;
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