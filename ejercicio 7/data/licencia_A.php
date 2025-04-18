<?php
require_once "licencia.php";

class LicenciaA extends Licencia {
    public function __construct() {
        parent::__construct("data/licencia_A.txt", 150000, "1 year");
    }
}