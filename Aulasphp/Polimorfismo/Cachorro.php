<?php
require_once 'Mamifero.php';
class Cachorro extends Mamifero{
    public function enterrarOsso() {
        echo 'Entenrrando osso<br>';
    }

    public function abanarRabo() {
        echo 'Abanando o rabo<br>';
    }

    public function emitirSom() {
        echo 'LATIDO<br>';
    }

}
?>