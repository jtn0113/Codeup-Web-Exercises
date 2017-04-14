<?php 

require_once 'Rectangle.php';
require_once 'Square.php';

$shape = new Rectangle(2, 5);

$shape2 = new Square(20, 20);

echo $shape->area() . PHP_EOL;

echo $shape2->perimeter() . PHP_EOL;