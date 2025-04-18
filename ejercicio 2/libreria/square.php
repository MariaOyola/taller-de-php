<?php
class Square extends GeometricFigure {
    private ?float $side;

    public function __construct(?float $side, ?string $name = null) {
        parent::__construct("Square", $name);
        $this->side = $side;
    }

    public function getSide(): ?float {
        return $this->side;
    }

    public function calculateArea(): float {
        return $this->side * $this->side;
    }
  }