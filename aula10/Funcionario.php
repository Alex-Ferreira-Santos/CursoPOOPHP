<?php

require_once 'Person.php';
class Funcionario extends Person {
    private $setor;
    private $trabalhando;

    public function mudarTrabalho(){
        $this->trabalhando = ! $this->trabalhando;
    }

    public function getSetor(){
        return $this->setor;
    }

    public function setSetor($setor){
        $this->setor = $setor;
    }

    public function getTrabalhando(){
        return $this->trabalhando;
    }

    public function setTrabalhando($trabalhando){
        $this->trabalhando = $trabalhando;
    }
}
?>