<?php 
    require_once 'Pessoa.php';
    class Aluno extends Pessoa
    {
        private $matricula;
        private $curso;

        public function pagarMensalidade() {
            echo '<p>Pagando mensalidade do aluno '.$this->nome.'</p>'; 
        }


        public function setMatricula($m) {
            $this->matricula = $m;
        }

        public function getMatricula() {
            return $this->martricula;
        }

        public function setCurso($c) {
            $this->curso = $c;
        }

        public function getCurso() {
            return $this->curso;
        }
    }
?>