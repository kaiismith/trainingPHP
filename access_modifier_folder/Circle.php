<?php
    include_once "Shape.php";

    class Circle extends Shape {
        private $radius;
     
        function __construct($name, $radius) {
            parent::__construct($name);
            $this->radius = $radius;
        }

        public function getRadius() {
            return $this->radius;
        }

        function calculateArea() {
            return pi() * ($this->radius ** 2);
        }

        function calculatePerimeter() {
            return 2 * pi() * ($this->radius);
        }
    }

?>