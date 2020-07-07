<?php 
    require_once 'Controlador.php';
    class ControleRemoto implements Controlador
    {
        private $volume;
        private $ligado;
        private $tocando;

        public function __construct() {
            $this->volume = 50;
            $this->ligado = false;
            $this->tocando = false;
        }

        private function getVolume() {
            return $this->volume;
        }

        private function setVolume($v) {
            $this->volume = $v;
        }

        private function getLigado() {
            return $this->ligado;
        }

        private function setLigado($l) {
            $this->ligado = $l;
        }

        private function getTocando() {
            return $this->tocando;
        }

        private function setTocando($t) {
            $this->tocando = $t;
        }

        // metodos abstrato implemntados

        public function ligar() {
            $this->setLigado(true);
        }

        public function desligar() {
            $this->setLigado(false);
        }

        public function abriMenu() {
            echo '<-------------------- menu --------------------->';
            echo '<br>Esta ligado?: '.($this->getLigado()?"SIM":"NÃO");
            echo '<br>Esta Tocando?: '.($this->getTocando()?"SIM":"NÃO");
            echo '<br>Volume: '.$this->getVolume();
            for($i = 0;$i <= $this->getVolume(); $i+=10){
                echo " | ";
            }
            echo '<br>';
        }

        public function fecharMenu() {
            echo "<br>Fechando menu";
        }

        public function maisVolume() {
            if($this->getLigado()){
                $this->setVolume($this->getVolume() + 5);
            }else{
                echo '<p>Erro não posso aumanetar volume com TV desligada</p>';
            }
        }

        public function menosVolume() {
            if($this->getligado()){
                $this->setVolume($this->getVolume() - 5);
            }else{
                echo '<p>Erro não posso diminuir o Volume co TV desligada</p>';
            }
        }

        public function ligarMudo() {
            if($this->getLigado() && $this->getVolume() > 0){
                $this->setVolume(0);
            }
        }

        public function desligarMudo() {
            if($this->getLigado() && $this->getLigado() == 0){
                $this->setVolume(50);
            }
        }

        public function play() {
            if($this->getLigado() && !($this->getTocando())){
                $this->setTocando(true);
            }
        }

        public function pause() {
            if($this->getLigado() && $this->getTocando()){
                $this->setTocando(false);
            }
        }

    }
?>