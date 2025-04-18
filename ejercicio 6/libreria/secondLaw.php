<?php
require_once "newtonLaw.php";

class SecondLaw extends NewtonLaw {
    private float $mass;
    private float $acceleration;

    public function __construct(float $mass, float $acceleration) {
        $this->mass = $mass;
        $this->acceleration = $acceleration;
    }

    public function calculate(): string {
        $force = $this->mass * $this->acceleration;
        return "2nd Law: F = m * a => F = {$this->mass} * {$this->acceleration} = $force N";
    }
}