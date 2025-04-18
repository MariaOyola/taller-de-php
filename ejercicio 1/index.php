<?php
include_once("libreria/person.php");
include_once("libreria/apprentices.php");
include_once("libreria/teacher.php");

$apprentices = new Apprentices();
$apprentices->setNames("Maria");
$apprentices->setBirthDay("2007-05-12");

$teachers = new Teacher();
$teachers->setNames("Andres");
$teachers->setTitle("Ing. sistemas");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Name: " . $apprentices->getNames() . "<br>";
    echo "BirthDay: " . $apprentices->getBirthDay() . "<br>"; 
    echo "Teacher: " . $teachers->getNames() . "<br>";
    echo "Title: " . $teachers->getTitle() . "<br>"; 
    ?>
</body>
</html>