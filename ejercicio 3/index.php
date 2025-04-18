<?php
require_once "libreria/Person.php";

$maria = new Person("Maria", 20, 50000, 50000);


$salary = $maria->calculateSalary();
$totalDeductions = $maria->getDebts()->calculateTotal($salary);
$totalToPay = $maria->calculateTotalToPay();
$transportSubsidy = $maria->calculateTransportSubsidy();
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
    echo "Employee name: " . $maria->getName() . "<br>";
    echo "Base salary: $" . number_format($salary, 2) . "<br>";
    echo "Transport subsidy: $" . number_format($transportSubsidy, 2) . "<br>";
    echo "Total deductions: $" . number_format($totalDeductions, 2) . "<br>";
    echo "Total to pay: $" . number_format($totalToPay, 2);
    ?>
</body>
</html>
