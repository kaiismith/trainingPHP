<?php
    include_once "shape.php";

    class Rectangle extends Shape {
        public $length;
        public $width;
     
        function __construct($name, $length, $width) {
            $this->name = $name;
            $this->length = $length;
            $this->width = $width;
        }

        function calculateArea() {
            return $this->length * $this->width;
        }

        function calculatePerimeter() {
            return 2 * ($this->length + $this->width);
        }
    }

?>