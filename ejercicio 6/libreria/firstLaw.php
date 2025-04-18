<?php
require_once "newtonLaw.php";

class FirstLaw extends NewtonLaw {
    private ?string $concept;

    public function __construct(?string $concept) {
        $this->concept = $concept;
    }

    public function calculate(): string {
        return "1st Law: Inertia (if F = 0, the object maintains its state). " . $this->concept;
    }
}
