<?php 
    class ContaBanco
    {
        // Atributos
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;
        
        // Metodos especiais 
        public function __construct() {
            $this->setSaldo(0);
            $this->SetStatus(falsse);
            echo "<p>Conta criada com sucesso!</p>";
        }

        public function setNumConta($n) {
            $this->numConta = $n;
        }

        public function getNumConta() {
            return $this->numConta;
        }

        public function setTipo($t) {
            $this->tipo = $t;
        }

        public function getTipo() {
            return $this->tipo;
        }

        public function setDono($d) {
            $this->dono = $d;
        }

        public function getDono() {
            return $this->dono;
        }

        public function setSaldo($s) {
            $this->saldo = $s;
        }

        public function getSaldo() {
            return $this->saldo;
        }

        public function setStatus($st) {
            $this->status = $st;
        }

        public function getStatus() {
            return $this->status;
        }

        // Metodos
        public function abrirConta($t) {
            $this->setTipo($t);
            $this->setStatus(true);

            if(t == "CC"){
                $this->saldo = 50;
            }else if($t == "CP"){
                $this->saldo = 150;
            }
        }

        public function fecharConta() {
            if($this->saldo > 0){
                echo '<p>Conta tem dinheiro</p>';
            }else if($this->saldo < 0){
                echo '<p>Conta em debito</p>';
            }else{
                $this->setStatus(false);
            }
        }

        public function depositar($v) {
            if($this->status = true){
                $this->saldo = $this->saldo + $v;
            }else{
                echo '<p>Impossivel depositar</p>';
            }
        }

        public function sacar($v) {
            if($this->getStatus()){
                if($getSaldo() > $v){
                    $this->setSaldo($this->getSaldo() - $v);
                }else{
                    echo '<p>Voce nao tem todo esse dinheiro</p>';
                }
            }else{
                echo '<p>Impossível sacar de um conta fechada</p>';
            }
        }

        public function pagarMensal() {
            if($this->getTipe() == 'CC'){
                $v = 12;
            }else if($this->getTipe() == 'CP'){
                $v = 20;
            }

            if($this->getStatus()){
                if($this->getSaldo() > $v){
                    $this->setSaldo($this->getSaldo() - $v);
                }else{
                    echo '<p>Impossivel pagar</p>';
                }
            }

        }


    }
    
?>