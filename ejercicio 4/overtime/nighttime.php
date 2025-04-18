<?php
class Nighttime {
    public static function calculate(float $hourRate, int $hours): float {
        return $hourRate * $hours * 1.75;
    }
}
