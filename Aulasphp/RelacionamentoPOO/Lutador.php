<?php 
    class Lutador {
        // atributos.
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;
        // metodos.
        public function apresentar() {
            echo "<br>Lutador: ". $this->getNome();
            echo "<br>Nacionalidade: ".$this->getNacionalidade();
            echo "<br>Idade: ".$this->getIdade()." anos";
            echo "<br>Altura: ".$this->getAltura()." m de altura";
            echo "<br>Peso: ".$this->getPeso()." kg";
            echo "<br>Ganhou: ".$this->getVitorias();
            echo "<br>Perdeu: ".$this->getDerrotas();
            echo '<br>Empate: '.$this->getEmpates();
        }

        public function status() {
            echo $this->getNome();
            echo "<p> é um peso ".$this->getPeso();
            echo " com ".$this->getVitorias()." vitorias ";
            echo " é ".$this->getDerrotas()." derrotas ";
            echo " é ".$this->getEmpates()." empates.</p>";
        }

        public function ganharLuta() {
            $this->setVitorias($this->getVitorias() + 1);
        }

        public function perderLuta() {
            $this->setDerrotas($this->getDerrotas() + 1);
        }

        public function empatarLuta() {
            $this->setEmpates($this->getEmpates() + 1);
        }

        // Metodos especiais.
        public function __construct($no,$na,$id,$al,$pe,$vi,$de,$em) {
            $this->nome = $no;
            $this->nacionalidade = $na;
            $this->idade = $id;
            $this->altura = $al;
            $this->setPeso($pe);
            $this->vitorias = $vi;
            $this->derrotas = $de;
            $this->empates = $em;
        }
        
        public function getNome(){
            return $this->nome;
        }

        public function setNome($no) {
            $this->nome = $no;
        }

        public function getNacionalidade() {
            return $this->nacionalidade;
        }

        public function setNacionalidade($na) {
            $this->nacionalidade = $na;
        }

        public function getIdade() {
            return $this->idade;
        }

        public function setIdade($id) {
            $this->idade = $id;
        }

        public function getAltura() {
            return $this->altura;
        }

        public function setAltura($al) {
            $this->altura = $al;
        }

        public function getPeso() {
            return $this->peso;
        }

        public function setPeso($pe) {
            $this->peso = $pe;
            $this->setCategoria();
        }

        public function getCategoria() {
            return $this->categoria;
        }

        public function setCategoria() {
            if($this->peso < 52.2){
                $this->categoria = 'Invalido';
            }else if($this->peso <= 70.3){
                $this->categoria = 'Leve';
            }else if($this->peso <= 83.9){
                $this->categoria = 'Medio';
            }else if($this->peso <= 120.2){
                $this->categoria = 'Peso';
            }else{
                $this->categoria = 'Sumo';
            }
        }

        public function getVitorias() {
            return $this->vitorias;
        }

        public function setVitorias($vi) {
            $this->vitorias = $vi;
        }

        public function getDerrotas() {
            return $this->derrotas;
        }

        public function setDerrotas($de) {
            $this->derrotas = $de;
        }

        public function getEmpates() {
            return $this->empates;
        }

        public function setEmpates($em) {
            $this->empates = $em;
        }
    }
?>