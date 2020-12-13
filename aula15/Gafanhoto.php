<?php
require_once 'Pessoa.php';
class Gafanhoto extends Pessoa{
    private $login;
    private $totAssitido;

    public function __construct($nome,$idade,$sexo,$login){
        parent::__construct($nome,$idade,$sexo);
        $this->login = $login;
        $this->totAssitido = 0;
    }

    public function assistirMaisUm(){
        $this->totAssitido++;
    }

    public function getLogin(){
        return $this->login;
    }

    public function setLogin($login){
        $this->login = $login;
    }

    public function getTotAssitido(){
        return $this->totAssitido;
    }

    public function setTotAssitido($totAssitido){
        $this->totAssitido = $totAssitido;
    }
}