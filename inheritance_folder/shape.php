<?php

    class Shape {
        public $name;

        function __construct($name) {
            $this->name = $name;
        }

        function showName() {
            echo "My name is " . $this->name . ".<br>";
        }
    }
    
?>