<?php

class ContaBanco{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function __construct(){
        $this->status = false;
        $this->saldo = 0;
    }

    public function getNumConta(){
        return $this->numConta;
    }

    public function setNumConta($numConta){
        return $this->numConta = $numConta;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

    public function getDono(){
        return $this->dono;
    }

    public function setDono($dono){
        $this->dono = $dono;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    public function setSaldo($saldo){
        $this->saldo = $saldo;
    }

    public function getStatus(){
        return $this->status;
    }

    public function setStatus($status){
        $this->status = $status;
    }

    public function abrirConta($tipo){
        $this->setTipo($tipo);
        $this->setStatus(true);
        if(strtolower($tipo)==="cc"){
            $this->setSaldo(50);
        }else{
            $this->setSaldo(150);
        }
        echo "<p>Conta criada com sucesso, seu saldo é de {$this->getSaldo()}</p>";
    }

    public function fecharConta(){
        if($this->getSaldo()){
            $this->setStatus(false);
            echo "<p>Conta de {$this->getDono()} fechada com sucesso </p>";
        }
        elseif($this->getSaldo()>0){
            echo "<p>Você tem {$this->getSaldo()} ainda para sacar antes de fechar a conta</p>";
        }
        else{
            echo "<p>Você precisa pagar {$this->getSaldo()} para fechar a conta</p>";
        }
    }

    public function depositar($num){
        if($this->getStatus()){
            $this->setSaldo($this->getSaldo() + $num);
            echo "<p> Deposito de $num na conta de {$this->getDono()}</p>";
        }else{
            echo "<p>Abra uma conta no banco para poder depositar seu dinheiro</p>";
        }
    }

    public function sacar($num){
        if($this->getStatus()){
            if($num >= $this->getSaldo()){
                echo "<p>Quantidade acima do saldo atual</p>";
            }
            elseif($num <= $this->getSaldo()){
                $this->setSaldo($this->getSaldo() - $num);
                echo "<p>Saque de {$this->getSaldo()} na conta de R$ {$this->getDono()}</p>";
            }else{
                echo "<p>Coloque um valor válido</p>";
            }

        }else{
            echo "<p>Abra uma conta no banco para poder depositar seu dinheiro</p>";
        }

    }

    public function pagarMensal(){
        if(strtolower($this->getTipo())==="cc"){
            $this->setSaldo($this->getSaldo()-12);
            echo "Mensalidade de R$12 paga na conta de {$this->getDono()}";
        }
        else{
            $this->setSaldo($this->getSaldo()-20);
            echo "Mensalidade de R$20 paga na conta de {$this->getDono()}";
        }
        echo "<p>Mensalidade paga agora o seu saldo é de {$this->getSaldo()}</p>";
    }
}

?>