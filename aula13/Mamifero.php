<?php
require_once 'Animal.php';
class Mamifero extends Animais{
    protected $corPelo;
    public function emitirSom(){
        echo "<p>Som de Mamifero</p>";
    }
}