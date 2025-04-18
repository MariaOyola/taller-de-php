<?php
require_once "libreria/salaryBase.php";
require_once "employees/employees.php";
require_once "overtime/daytime.php";
require_once "overtime/nighttime.php";
require_once "overtime/holiday.php";
require_once "deductions/arl.php";
require_once "deductions/health.php";
require_once "deductions/pension.php";

$salaryBase = new SalaryBase(2500000);
$employees = new Employees("Carlos", $salaryBase);

$hourRate = $salaryBase->getValue() / 240;
$subsidy = $salaryBase->getSubsidy();

$dayExtra = Daytime::calculate($hourRate, 5);
$nightExtra = Nighttime::calculate($hourRate, 3);
$holidayExtra = Holiday::calculate($hourRate, 2);
$totalOvertime = $dayExtra + $nightExtra + $holidayExtra;

$health = Health::calculate($salaryBase->getValue());
$pension = Pension::calculate($salaryBase->getValue());
$arl = ARL::calculate($salaryBase->getValue(), 2); 

$totalDeductions = $health + $pension + $arl;

$totalPayment = $salaryBase->getValue() + $subsidy + $totalOvertime - $totalDeductions;

echo "Employee: " . $employees->getName() . "<br>";
echo "Base salary: $" . number_format($salaryBase->getValue(), 0) . "<br>";
echo "Subsidy: $" . number_format($subsidy, 0) . "<br>";
echo "Overtime: $" . number_format($totalOvertime, 0) . "<br>";
echo "Deductions: $" . number_format($totalDeductions, 0) . "<br>";
echo "<strong>Total Payment: $" . number_format($totalPayment, 0) . "</strong>";
?>