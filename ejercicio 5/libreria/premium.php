<?php
require_once 'Plan.php';

class Premium extends Plan {
    public function __construct() {
        $this->name = "Premium";
        $this->price = "180000";
        $this->service = "Incluye entrenador personal y zona húmeda";
      }
}