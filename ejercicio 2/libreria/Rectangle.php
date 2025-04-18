<?php
class Rectangle extends GeometricFigure {
    private ?float $base;
    private ?float $height;

    public function __construct(?float $base, ?float $height, ?string $name = null) {
        parent::__construct("Rectangle", $name);
        $this->base = $base;
        $this->height = $height;
    }

    public function getBase(): ?float {
        return $this->base;
    }

    public function getHeight(): ?float {
        return $this->height;
    }

    public function calculateArea(): float {
        return $this->base * $this->height;
    }
}