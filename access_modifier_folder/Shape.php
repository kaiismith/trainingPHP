<?php

    class Shape {
        private $name;

        public function __construct($name) {
            $this->name = $name;
        }

        public function getName() {
            return $this->name;
        }

        public function showName() {
            return "My name is " . $this->name . ".<br>";
        }
    }
    
?>