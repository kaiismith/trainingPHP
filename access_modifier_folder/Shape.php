<?php

    class Shape {
        private $name;

        function __construct($name) {
            $this->name = $name;
        }

        public function getName() {
            return $this->name;
        }

        function showName() {
            return "My name is " . $this->name . ".<br>";
        }
    }
    
?>