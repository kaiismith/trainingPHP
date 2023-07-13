<?php
    include_once "Shape.php";

    class Circle extends Shape {
        private $radius;
     
        public function __construct($name, $radius) {
            parent::__construct($name);
            $this->radius = $radius;
        }

        public function getRadius() {
            return $this->radius;
        }

        public function calculateArea() {
            return pi() * ($this->radius ** 2);
        }

        public function calculatePerimeter() {
            return 2 * pi() * ($this->radius);
        }
    }

?>