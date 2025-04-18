<?php
require_once "arl.php";
require_once "health.php";
require_once "pension.php";

class Deductions {
    private ARL $arl; 
    private Health $health;
    private Pension $pension; 

    public function __construct() {
        $this->arl = new ARL();
        $this->health = new Health(); 
        $this->pension = new Pension();
    }

    public function calculate(float $salaryBase): float {
        return $this->arl->calculate($salaryBase, $this->levels) +
               $this->health->calculate($salaryBase) +
               $this->pension->calculate($salaryBase);
    }
}

