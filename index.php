<?php
include("libreria/person.php");
include("libreria/apprentices.php");

$apprentices = new Apprentices();
$apprentices->setName("Maria");
$apprentices->setTelephoneContact(3209663179);
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
    echo "Name: " . $apprentices->getName();
    echo "<br/>";
    echo "Telephone: " . $apprentices->getTelephoneContact();
    ?>
    </body>
    </html>
    