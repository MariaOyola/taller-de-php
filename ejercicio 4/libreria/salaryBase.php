<?php
class SalaryBase {
    private float $value;
    private const SMMLV = 1300000;

    public function __construct(?float $value) {
        $this->value = $value;
    }

    public function getValue(): float {
        return $this->value;
    }

    public function getSubsidy(): float {
        return $this->value < 2 * self::SMMLV ? self::SMMLV : 0;
    }
}
    

    