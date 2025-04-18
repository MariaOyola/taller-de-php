<?php
class Pension {
    public static function calculate(float $salaryBase): float {
        return $salaryBase * 0.004;
    }
}