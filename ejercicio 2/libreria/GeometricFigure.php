<?php
abstract class GeometricFigure {
    private ?string $name;
    private ?string $other;

    public function __construct(?string $name = null, ?string $other = null) {
        $this->name = $name;
        $this->other = $other;
    }

    public function getName(): ?string {
        return $this->name;
    }

    public function getOther(): ?string {
        return $this->other;
    }

    abstract public function calculateArea(): float;
}