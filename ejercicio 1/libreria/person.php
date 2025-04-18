<?php
class person{
    private ?int $identification;
    private ?string $names;
    private ?string $lastName;
    private ?string $birthday;

    public function getIdentification(){
        return $this->identification; 
    }
    
    public function setIdentification(int $identification){
        $this->identification = $identification; 
    }
    
    public function getNames(){
        return $this->names; 
    }
    
    public function setNames(string $names){
        $this->names = $names;
    }
    
    public function getLastName(){
        return $this->lastName; 
    }
    
    public function setLastName(string $lastName){
        $this->lastName = $lastName;
    }
    
    public function getBirthday(){
        return $this->birthday; 
    }
    public function setBirthday(string $birthday){
        $this->birthday=$birthday;
    }
}
    