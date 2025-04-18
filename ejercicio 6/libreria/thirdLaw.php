<?php
require_once "newtonLaw.php";

class ThirdLaw extends NewtonLaw {
    private ?string $action;

    public function __construct(?string $action) {
        $this->action = $action; 
    }

    public function calculate(): string {
        return "3rd Law: To every action ({$this->action}) there is an equal and opposite reaction.";
    }
}