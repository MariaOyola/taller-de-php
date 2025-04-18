<?php
include_once("libreria/GeometricFigure.php");
include_once("libreria/Square.php");
include_once("libreria/Triangle.php");
include_once("<libreria/Rectangle.php");
include_once("libreria/Circumference.php");

$square = new Square(5);
$triangle = new Triangle(20, 2);
$rectangle = new Rectangle(20,4);
$circumference =new Circumference(2, 3.1416);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php
    echo "area of the square: " . $square->calculateArea() . "<br>";
    echo "area of the triangle: " . $triangle->calculateArea() . "<br>";
    echo "area of the rectangle : " . $rectangle-> calculateArea(). "<br>";
    echo " area of the Circumference: " . $circumference->calculateArea(). "<br>";  
    ?>
</body>
</html>