<?php

require_once 'Pessoa.php';
class Aluno extends Person{
    private $matricula;
    private $curso;

    public function PagarMensalidade(){
        echo "<p>Pagando mensalidade do aluno {$this->getNome()}</p>";
    }

    public function getMatricula(){
        return $this->matricula;
    }

    public function setMatricula($matricula){
        $this->matricula = $matricula;
    }

    public function getCurso(){
        return $this->curso;
    }

    public function setCurso($curso){
        $this->curso = $curso;
    }
}