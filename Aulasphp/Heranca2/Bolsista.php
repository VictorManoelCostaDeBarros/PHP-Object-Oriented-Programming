<?php 
    require_once 'Aluno.php';
    class Bolsista extends Aluno
    {
        private $bolsa;

        public function renovarBolsa() {
            echo "<p>Bolsa renovada!</p>";
        }

        public function pagarMensalidade() {
            echo "<p>$this->nome é bolsista entao tem desconto de $this->bolsa%</p>";
        }

        public function setBolsa($b) {
            $this->bolsa = $b;
        }

        public function getBolsa() {
            return $this->bolsa;
        }

        
    }
?>