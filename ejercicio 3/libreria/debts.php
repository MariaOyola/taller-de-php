<?php
require_once 'Health.php';
require_once 'Pension.php';
require_once 'Arl.php';

class Debts {
    private $health;
    private $pension;
    private $arl;

    public function __construct() {
        $this->health = new Health();
        $this->pension = new Pension();
        $this->arl = new Arl();
    }
    public function calculateTotal($salary) {
        return $this->health->calculate($salary) +
               $this->pension->calculate($salary) +
               $this->arl->calculate($salary);
    }
}
