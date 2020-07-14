<?php 
abstract class Pessoa{
    protected $nome;
    protected $idade;
    protected $sexo;
    protected $experiencia;

    public function __construct($nome,$idade,$sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->experiencia = 0;
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

    public function setExperiencia($e) {
        $this->experiencia = $e;
    }

    public function getExperiencia() {
        return $this->experiencia;
    }


    protected function ganharExp($n) {
        $this->experiencia += $n;
    }
}
?>