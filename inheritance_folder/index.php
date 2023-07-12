<?php

use LDAP\Result;

    include_once "circle.php";
    include_once "cylinder.php";
    include_once "rectangle.php";
    include_once "rectangular.php";

    $circle = new Circle("Kai", 3);
    echo "<<< CIRCLE >>><br>";
    $circle->showName();
    echo "AREA: " . $circle->calculateArea() . "<br>";
    echo "PERIMETER: " . $circle->calculatePerimeter() . "<br><br>";

    $cylinder = new Cylinder("Kai", 3, 5);
    echo "<<< CYLINDER >>><br>";
    $cylinder->showName();
    echo "AREA: ". $cylinder->calculateArea() . "<br>";
    echo "PERIMETER: " . $cylinder->calculatePerimeter() . "<br>";
    echo "VOLUME: " . $cylinder->calculateVolume() . "<br><br>";

    $rectangle = new Rectangle("Kai", 2, 3);
    echo "<<< RECTANGLE >>><br>";
    $rectangle->showName();
    echo "AREA: ". $rectangle->calculateArea() . "<br>";
    echo "PERIMETER: ". $rectangle->calculatePerimeter() . "<br><br>";

    $rectangular = new Rectangular("Kai", 2, 3, 4);
    echo "<<< RECTANGULAR >>><br>";
    $rectangular->showName();
    echo "AREA: " . $rectangular->calculateArea() . "<br>";
    echo "PERIMETER: " . $rectangular->calculatePerimeter() . "<br>";
    echo "VOLUME: " . $rectangular->calculateVolume() . "<br><br>";



?>