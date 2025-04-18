<?php
class ARL {
private static array $levels = [
    1 => 0.00522,
    2 => 0.01044,
    3 => 0.02436,
    4 => 0.04350,
    5 => 0.06960
];

public static function calculate(float $salary, int $level): float {
    return $salary * (self::$levels[$level] ?? 0);
}
}
