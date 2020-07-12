<?php 
require_once 'Animal.php';

class Mamifero extends Animal{
    private $corPelo;
    
    public function locomover() {
        echo 'Correndo<br>';
    }

    public function alimentar() {
        echo 'Mamando<br>';
    }

    public function emitirSom() {
        echo 'Som de mamifero<br>';
    }

    public function setCorPelo($cp) {
        $this->corPelo = $cp;
    }

    public function getCorPelo() {
        return $this->corPelo;
    }
}
?>