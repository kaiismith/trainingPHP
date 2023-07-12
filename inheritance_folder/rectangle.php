<?php
    include_once "Shape.php";

    class Rectangle extends Shape {
        public $length;
        public $width;
     
        function __construct($name, $length, $width) {
            parent::__construct($name);
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