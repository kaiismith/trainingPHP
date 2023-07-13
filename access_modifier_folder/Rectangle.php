<?php
    include_once "Shape.php";

    class Rectangle extends Shape {
        private $length;
        private $width;
     
        function __construct($name, $length, $width) {
            parent::__construct($name);
            $this->length = $length;
            $this->width = $width;
        }

        public function getLength() {
            return $this->length;
        }

        public function getWidth() {
            return $this->width;
        }

        function calculateArea() {
            return $this->length * $this->width;
        }

        function calculatePerimeter() {
            return 2 * ($this->length + $this->width);
        }
    }

?>