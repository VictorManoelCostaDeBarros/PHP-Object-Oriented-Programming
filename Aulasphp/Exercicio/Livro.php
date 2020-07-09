<?php 
    require_once 'Pessoa.php';
    require_once 'Publicacao.php';
    class Livro implements Publicacao
    {
        private $titulo;
        private $autor;
        private $totPagina;
        private $pagAtual;
        private $aberto;
        private $leitor;

        public function detalhes() {
            echo "<hr>Livro ".$this->titulo." escrito por ".$this->autor;
            echo "<br> Páginas ".$this->totPagina." atual ".$this->pagAtual;
            echo "<br> Sendo lido por ".$this->leitor->getNome();
        }

        public function __construct($ti,$au,$tp,$le) {
            $this->titulo= $ti;
            $this->autor = $au;
            $this->totPagina= $tp;
            $this->pagAtual = 0;
            $this->aberto = false;
            $this->leitor = $le;
        }

        public function setTitulo($ti) {
            $this->titulo = $ti;
        }

        public function getTitulo() {
            return $this->titulo;
        }

        public function setAutor ($au) {
            $this->autor = $au;
        }

        public function getAutor () {
            return $this->autor ;
        }

        public function setTotPagina ($tp) {
            $this->totPagina = $tp;
        }

        public function getTotpagina () {
            return $this->totPagina;
        }

        public function setPagAtual ($pa) {
            $this->pagAtual = $pa;
        }

        public function getPagAtual () {
            return $this->pagAtual;
        }

        public function setAberto ($ab) {
            $this->aberto = $ab;
        }

        public function getAberto () {
            return $this->aberto;
        }

        public function setLeitor($le) {
            $this->leitor = $le;
        }

        public function getLeitor () {
            return $this->leitor;
        }

        // MEtodos da Publicacao
        public function abrir(){
            $this->aberto = true;
        }

        public function fechar(){
            $this->aberto = false;
        }

        public function folhear($p){
            if($p >$this->totPagina) {
                $this->pagAtual = 0;
            }else{
                $this->pagAtual = $p;
            }
        }

        public function avancarPag(){
            $this->pagAtual ++;
        }

        public function voltarPag(){
            $this->pagAtual --;
        }
    }
?>