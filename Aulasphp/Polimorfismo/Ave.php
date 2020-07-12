<?php 
require_once 'Animal.php';
class Ave extends Animal{
    private $corPena;

    public function locomover() {
        echo 'Voando<br>';
    }

    public function alimentar() {
        echo 'Comendo frutas<br>';
    }

    public function emitirSom() {
        echo 'Som da Ave<br>';
    }

    public function fazerNinho() {
        echo 'Construi um ninho<br>';
    }

    public function setCorPena($cp) {
        $this->corPena = $c;
    }

    public function getCorPena() {
        return $this->corPena;
    }
}
?>