<?php

use LDAP\Result;

    include_once "Circle.php";
    include_once "Cylinder.php";
    include_once "Rectangle.php";
    include_once "Rectangular.php";

    $circle = new Circle("Kai", 3);
    echo "<<< CIRCLE >>><br>";
    echo "RADIUS: " . $circle->getRadius() . "<br>";
    echo $circle->showName();
    echo "AREA: " . $circle->calculateArea() . "<br>";
    echo "PERIMETER: " . $circle->calculatePerimeter() . "<br><br>";

    $cylinder = new Cylinder("Kai", 3, 5);
    echo "<<< CYLINDER >>><br>";
    echo "RADIUS: " . $cylinder->getRadius() . "<br>";
    echo "HEIGHT: ". $cylinder->getHeight() . "<br>";
    echo $cylinder->showName();
    echo "AREA: ". $cylinder->calculateArea() . "<br>";
    echo "PERIMETER: " . $cylinder->calculatePerimeter() . "<br>";
    echo "VOLUME: " . $cylinder->calculateVolume() . "<br><br>";

    $rectangle = new Rectangle("Kai", 2, 3);
    echo "<<< RECTANGLE >>><br>";
    echo "LENGTH: " . $rectangle->getLength() . "<br>";
    echo "WIDTH: " . $rectangle->getWidth() . "<br>";
    echo $rectangle->showName();
    echo "AREA: ". $rectangle->calculateArea() . "<br>";
    echo "PERIMETER: ". $rectangle->calculatePerimeter() . "<br><br>";

    $rectangular = new Rectangular("Kai", 2, 3, 4);
    echo "<<< RECTANGULAR >>><br>";
    echo "LENGTH: " . $rectangular->getLength() . "<br>";
    echo "WIDTH: " . $rectangular->getWidth() . "<br>";
    echo "HEIGHT: " . $rectangular->getHeight() . "<br>"; 
    echo $rectangular->showName();
    echo "AREA: " . $rectangular->calculateArea() . "<br>";
    echo "PERIMETER: " . $rectangular->calculatePerimeter() . "<br>";
    echo "VOLUME: " . $rectangular->calculateVolume() . "<br><br>";

?>