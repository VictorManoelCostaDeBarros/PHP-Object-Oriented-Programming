<?php 
    class Pessoa
    {
        private $nome;
        private $idade;
        private $sexo;

        public function fazerAniver() {
            $this->$idade = $this->$idade + 1;
        }

        public function __construct($nome,$idade,$sexo) {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->sexo = $sexo;
        }

        public function setNome($n) {
            $this->nome = $n;
        }

        public function getNome() {
            return $this->nome;
        }

        public function setIdade($i) {
            $this->idade = $i;
        }

        public function getIdade() {
            return $this->idade;
        }

        public function setSexo($s) {
            $this->sexo = $s;
        }

        public function getSexo() {
            return $this->sexo;
        }

}
?>