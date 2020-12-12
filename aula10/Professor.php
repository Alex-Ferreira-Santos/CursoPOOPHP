<?php

require_once 'Person.php';
class Professor extends Person{
    private $especialidade;
    private $salario;

    public function receberAumento($aum){
        $this->salario = $aum;
    }

    public function getEspecialidade(){
        return $this->especialidade;
    }

    public function setEspecialidade($especialidade){
        $this->especialidade = $especialidade;
    }

    public function getSalario(){
        return $this->salario;
    }

    public function setSalario($salario){
        $this->salario = $salario;
    }
}
?>