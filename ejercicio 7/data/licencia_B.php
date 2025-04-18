<?php
require_once "licencia.php";

class LicenciaB extends Licencia {
    public function __construct() {
        parent::__construct("data/licencia_B.txt", 200000, "2 year");
    }
}
