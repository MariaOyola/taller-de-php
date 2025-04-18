<?php
require_once "licencia.php";

class LicenciaC extends Licencia {
    public function __construct() {
        parent::__construct("data/licencia_C.txt", 350000, "4 year");
    }
}
