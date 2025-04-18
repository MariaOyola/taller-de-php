<?php 
class Circumference extends GeometricFigure{

private ?float $radius;
private $pi= 3.1416;
  
public function __construct(?float $radius, $pi, ?string $name = null) {
    parent::__construct("Circumference" , $name);
$this->radius =$radius;
$this->pi =$pi;
}
public function getRadius(): ?float {
    return $this->radius;
}
public function getPi(): ?float { 
return $this-> pi;
}
public function calculateArea(): float {
    return $this->pi * $this->radius * $this ->radius;
}
}


