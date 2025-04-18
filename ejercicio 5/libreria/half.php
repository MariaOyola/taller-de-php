<?php
require_once 'Plan.php';

class Half extends Plan {
    public function __construct() {
        $this->name = "Medio";
        $this->price = "120000";
        $this->service = "Incluye clases dirigidas";
   }
}