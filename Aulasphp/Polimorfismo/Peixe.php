<?php 
require_once 'Animal.php';
class Peixe extends Animal{
    private $corEscama;

    public function locomover() {
        echo 'Nadando<br>';
    }

    public function alimentar() {
        echo 'Comendo substâcias<br>';
    }

    public function emitirSom() {
        echo 'Peixe não faz som<br>';
    }

    public function soltarBolha() {
        echo 'Soltou uma bolha<br>';
    }

    public function setCorEscama($ce) {
        $this->corEscama = $ce;
    }

    public function getCorEscama() {
        return $this->corEscama;
    }
}
?>