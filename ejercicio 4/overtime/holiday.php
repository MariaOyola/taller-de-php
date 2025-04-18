<?php
class Holiday {
    public static function calculate(float $hourRate, int $hours): float {
        return $hourRate * $hours * 2.00;
    }
}