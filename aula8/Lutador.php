<?php

class Lutador{
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    public function __construct($nome,$nascionalidade,$idade,$altura,$peso,$vitorias,$derrotas,$empates){
        $this->nome = $nome;
        $this->nascionalidade = $nascionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->setPeso($peso);
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;

    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNacionalidade(){
        return $this->nacionalidade;
    }

    public function setNacionalidade($nacionalidade){
        $this->nacionalidade = $nacionalidade;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function setIdade($idade){
        $this->idade = $idade;
    }

    public function getAltura(){
        return $this->altura;
    }

    public function setAltura($altura){
        $this->altura = $altura;
    }

    public function getPeso(){
        return $this->peso;
    }

    public function setPeso($peso){
        $this->peso = $peso;
        $this->setCategoria();
    }

    public function getCategoria(){
        return $this->categoria;
    }

    private function setCategoria(){
        if($this->getPeso()<52.2){
            $this->categoria = "Invalido";
        }
        elseif($this->getPeso()<=70.3){
            $this->categoria = "Leve";
        }
        elseif($this->getPeso()<=83.9){
            $this->categoria = "Médio";
        }
        elseif($this->getPeso()<=120.2){
            $this->categoria = "Pesado";
        }
        else{
            $this->categoria = "Invalido";
        }
        
    }

    public function getVitorias(){
        return $this->vitorias;
    }

    public function setVitorias($vitorias){
        $this->vitorias = $vitorias;
    }

    public function getDerrotas(){
        return $this->derrotas;
    }

    public function setDerrotas($derrotas){
        $this->derrotas = $derrotas;
    }

    public function getEmpates(){
        return $this->empates;
    }

    public function setEmpates($empates){
        $this->empates = $empates;
    }

    public function apresentar(){
        echo"---------------------------------------<br>";        
        echo "Lutador: {$this->getNome()}<br>";
        echo "Origem: {$this->getNacionalidade()}<br>";
        echo "{$this->getIdade()} anos<br>";
        echo "{$this->getAltura()} m de altura<br>";
        echo "Pesando: {$this->getPeso()} kg<br>";
        echo "Ganhou: {$this->getVitorias()}<br>";
        echo "Perdeu: {$this->getDerrotas()}<br>";
        echo "Empatou: {$this->getEmpates()}<br>";
        echo"---------------------------------------<br>"; 
    }

    public function status(){
        echo"---------------------------------------<br>"; 
        echo "{$this->getNome()}<br>";
        echo "é um peso {$this->getCategoria()}<br>";
        echo "{$this->getVitorias()} vitorias<br>";
        echo "{$this->getDerrotas()} derrotas<br>";
        echo "{$this->getEmpates()} empates<br>";
        echo"---------------------------------------<br>"; 
    }

    public function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
    }

    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
    }

    public function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
    }

}

?>