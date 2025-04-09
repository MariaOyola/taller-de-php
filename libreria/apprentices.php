<?php

    class apprentices extends person{

         private ?string $birthDay;
         private ?int $telephoneContact;

         public function getBirthDay(): string|null{
            return $this->bisthDay; 
         }
         public function setBirthDay(?string $bisthDay): void{
            $this->bisthDay=$bisthDay;    
         }
         public function getTelephoneContact(): int|null{
            return $this->telephoneContact; 
         } 
         public function setTelephoneContact(?int $telephoneContact): void{
            $this->telephoneContact=$telephoneContact;  
         }
    
    }