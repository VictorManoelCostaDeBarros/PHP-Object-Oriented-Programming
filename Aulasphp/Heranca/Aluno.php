<?php 
    require_once 'Pessoa.php';
    class Aluno extends Pessoa
    {
        private $matr;
        private $curso;

        public function cancelarMatricula() {
            echo 'Matricula Cancelada!';
            $this->setMatr(false);
        }


        public function setMatr($m) {
            $this->matr = $m;
        }

        public function getMatr() {
            return $this->mart;
        }

        public function setCurso($c) {
            $this->curso = $c;
        }

        public function getCurso() {
            return $this->curso;
        }
    }
?>