<?php
require_once 'Plan.php';

class Simple extends Plan {
    public function __construct() {
        $this->name = "Simple";
        $this->price = "60000";
        $this->service = "Acceso general";
   }
}