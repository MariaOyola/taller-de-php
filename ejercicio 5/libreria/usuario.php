<?php
class Usuario {
    private ?int $identification;
    private ?string $name;
    private ?string $Lastname;
    private ?float $weigth;
    private ?float $heigth;
    private Plan $plan;

    public function __construct(?int $identification, ?string $name, ?string $Lastname, ?float $weigth, ?float $heigth, Plan $plan) {
        $this->identification = $identification;
        $this->name = $name; 
        $this->Lastname = $Lastname; 
        $this->weigth = $weigth;
        $this->heigth = $heigth; 
        $this->plan = $plan;
    }

    public function getName() {
         return $this->name; 
        }
    public function getLastname() { 
        return $this->Lastname;
     }
    public function getIdentification() { 
        return $this->identification;
     }
    public function getHeigth() { 
        return $this->heigth;
     }
    public function getWeigth() {
         return $this->weigth; 
        }
    public function getPlan() {
         return $this->plan;
         }
}