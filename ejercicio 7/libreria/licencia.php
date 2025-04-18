<?php
abstract class Licencia {
    protected $file;
    protected $cost;
    protected $duracion;

    public function __construct($file, $cost, $duracion) {
        $this->file = $file;
        $this->cost = $cost;
        $this->duracion = $duracion;

        if (!file_exists(dirname($this->file))) {
            mkdir(dirname($this->file), 0777, true); 
        }
    }

    public function Register($datos) {
        $line = implode(" | ", $datos) . " | Costo: $this->cost | Duración: $this->duracion\n";
        file_put_contents($this->file, $line, FILE_APPEND);
    }

    public function Registe() {
        if (file_exists($this->file)) {
            return file($this->file, FILE_IGNORE_NEW_LINES);
        } else {
            return ["Aún no hay registros."];
        }
    }
}