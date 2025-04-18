<?php
 require_once 'libreria/salaryBase.php';
 
 class Employees {
    private ?string $name;
    private SalaryBase $salaryBase;

    public function __construct(?string $name, SalaryBase $salaryBase) {
        $this->name = $name;
        $this->salaryBase = $salaryBase;
    }

    public function getName(): ?string {
        return $this->name;
    }

    public function getSalarybase(): SalaryBase {
        return $this->salaryBase;
     }
}