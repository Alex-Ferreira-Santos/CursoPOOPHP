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
    }

    public function getCategoria(){
        return $this->categoria;
    }

    public function setCategoria($categoria){
        $this->categoria = $categoria;
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

    }

    public function status(){

    }

    public function ganharLuta(){

    }

    public function perderLuta(){

    }

    public function empatarLuta(){

    }

}

?>