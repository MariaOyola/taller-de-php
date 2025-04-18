<?php
require_once 'Debts.php';

class Person {
    const MINIMUM_WAGE = 1500000;

    private $name;
    private $daysWorked;
    private $valueDay;
    private $debts;

    public function __construct($name, $days, $valueDay) {
        $this->name = $name;
        $this->daysWorked = $days;
        $this->valueDay = $valueDay;
        $this->debts = new Debts();
    }

    public function calculateSalary() {
        return $this->daysWorked * $this->valueDay;
    }

    public function calculateTransportSubsidy() {
        $salary = $this->calculateSalary();
        return $salary < (2 * self::MINIMUM_WAGE) ? 135000 : 0;
    }

    public function calculateTotalToPay() {
        $salary = $this->calculateSalary();
        $subsidy = $this->calculateTransportSubsidy();
        $deductions = $this->debts->calculateTotal($salary);
        return ($salary + $subsidy) - $deductions;
    }

    public function getName() {
        return $this->name;
    }

    public function getDebts() {
        return $this->debts;
}
}