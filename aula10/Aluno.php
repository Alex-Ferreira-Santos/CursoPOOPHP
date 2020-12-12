<?php

require_once 'Person.php';

class Aluno extends Person {
    private $mat;
    private $curso;

    public function cancelarMatr(){
        echo "<p>Matricula será cancelada</p>";
    }

    public function getMat(){
        return $this->mat;
    }

    public function setMat($mat){
        $this->mat = $mat;
    }

    public function getCurso(){
        return $this->curso;
    }

    public function setCurso($curso){
        $this->cursor = $curso;
    }
}

?>