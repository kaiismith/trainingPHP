<?php

    // Integer
    echo "> Integer <br>";
    $a = 1;
    echo $a. "<br>";
    print_r($a. "<br>");
    var_dump($a);

    // Float
    echo "<br><br> > Float";
    $b = 1.5;
    echo  "<br>" .$b. "<br>";
    print_r($b. "<br>");
    var_dump($b);

    // Boolean
    echo "<br><br> > Boolean";
    $c = true;
    echo "<br>" .$c. "<br>";
    print_r($c. "<br>");
    var_dump($c);

    // Array
    echo "<br><br> > Array";
    $d = array(1, 2, 3);
    echo "<br>";
    var_dump($d);

    // Object
    echo "<br><br> > Object";
    class Human {
        public $name;
        public $color;
        public function __construct($name, $color) {
            $this->name = $name;
            $this->color = $color;
        }
        public function message() {
            return $this->name . " is " . $this->color . "!";
        }
    }

    $e = new Human("Kai", "black");
    echo "<br>";
    echo $e->message();
    echo "<br>";
    print_r($e->message());
    echo "<br>";
    var_dump($e->message());

    // String
    echo "<br><br> > String";
    $f = "Hello World!";
    echo  "<br>". $f . "<br>";
    print_r($f. "<br>");
    var_dump($f);

?>