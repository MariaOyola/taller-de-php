<?php
class Overtime {
    private Daytime $daytime;
    private Nighttime $nighttime;
    private Holiday $holiday;

    public function __construct(Daytime $daytime, Nighttime $nighttime, Holiday $holiday) {
        $this->daytime = $daytime;
        $this->nighttime = $nighttime;
        $this->holiday = $holiday;
    }

    public function calculateTotal(float $salaryBase): float {
        return $this->daytime->calculate($salaryBase) +
               $this->nighttime->calculate($salaryBase) +
               $this->holiday->calculate($salaryBase);
    }
}