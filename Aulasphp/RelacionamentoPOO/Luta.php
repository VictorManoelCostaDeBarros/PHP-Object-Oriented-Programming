<?php 
    require_once 'Lutador.php';
    class Luta {
        // Atributos
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;
        // Metodos
        public function marcarLuta($l1,$l2) {
            if($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)){
                $this->aprovada = true;
                $this->desafiado = $l1;
                $this->desafiante = $l2;
            }else{
                $this->aprovada = false;
                $this->defiado = null;
                $this->desafiante = null;
            }
        }

        public function lutar() {
            if($this->aprovada){
                $this->desafiado->apresentar();
                $this->desafiante->apresentar();
                $vencedor = rand(0,2);
                switch ($vencedor) {
                    case 0: // EMPATE
                        echo '<p>Empate</p>';
                        $this->desafiado->empatarLuta();
                        $this->desafiante->empatarLuta();
                        break;
                    case 1: // Desafiado vence
                        echo "<p>O ".$this->desafiado->getNome()." Venceu</p>";
                        $this->desafiado->ganharLuta();
                        $this->desafiante->perderLuta();
                        break;
                    case 2: // Desafiante vence
                        echo "<p>O ".$this->desafiante->getNome()." Venceu</p>";
                        $this->desafiante->ganharLuta();
                        $this->desafiado->perderLuta();
                        break;
                    default:
                        # code...
                        break;
                }   
            }else{
                echo '<p>Luta não pode acontecer!</p>';
            }
        }

        // metodos especiais
        public function setDesafiado($dd){
            $this->desafiado = $dd;
        }

        public function getDesafiado() {
            return $this->desafiado;
        }

        public function setDesafiante($dt) {
            $this->desafiante = $dt;
        }

        public function getDesafiante() {
            return $this->desafiante;
        }

        public function setRounds($r) {
            $this->rounds = $r;
        }

        public function getRounds() {
            return $this->rounds();
        }

        public function setAprovada($ap) {
            $this->aprovada = $ap;
        }

        public function gerAprovada() {
            return $this->aprovada;
        }
    }
?>