<?php
require_once 'Animal.php';
class Ave extends Animal{
    private $corPena;

    public function alimentar(){
        echo "<p>Comendo Frutas</p>";
    }

    public function emitirSom(){
        echo "<p>Som de ave</p>";
    }

    public function locomover(){
        echo "<p>Voando</p>";
    }

    public function fazerNinho(){
        echo "<p>Construindo um Ninho</p>";
    }

    public function getCorPena(){
        return $this->corPela;
    }

    public function setCorPena($corPena){
        $this->corPena = $corPena;
    }
}