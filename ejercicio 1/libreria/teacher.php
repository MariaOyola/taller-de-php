<?php
include_once("person.php");
   
class Teacher extends Person {
    private ?string $title;
    
    public function getTitle(): string|null{
        return $this->title;
    }

    public function setTitle(?string $title): void {
        $this->title = $title;
    }
}

