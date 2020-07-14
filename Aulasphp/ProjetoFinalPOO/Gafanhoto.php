<?php 
require_once 'Pessoa.php';

class Gafanhoto extends Pessoa{
    private $login;
    private $totAssistindo;

    public function __construct($nome,$idade,$sexo,$login) {
        parent::__construct($nome,$idade,$sexo);
        $this->login = $login;
        $this->totAssistindo= 0;
    }

    public function setLogin($l) {
        $this->login = $l;
    }

    public function getLogin() {
        return $this->login;
    }

    public function setTotAssistindo($ta) {
        $this->totAssistindo = $ta;
    }

    public function getTotAssistindo() {
        return $this->totAssistindo;
    }

    public function assistindoMaisUm(){
        $this->totAssistindo ++;
    }
}
?>