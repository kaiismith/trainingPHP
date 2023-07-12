<?php
    include_once "shape.php";

    class Circle extends Shape {
        public $radius;
     
        function __construct($name, $radius) {
            $this->name = $name;
            $this->radius = $radius;
        }

        function calculateArea() {
            return pi() * ($this->radius ** 2);
        }

        function calculatePerimeter() {
            return 2 * pi() * ($this->radius);
        }
    }

?>