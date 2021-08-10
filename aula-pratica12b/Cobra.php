<?php

require_once 'Reptil.php';

class Cobra extends Reptil
{
    public function locomover()
    {
        echo "<p>Rastejando</p>";
    }
    public function alimentar()
    {
        echo "<p>Matando</p>";
    }
    public function emitirSom()
    {
        echo "<p>Psiiiii</p>";
    }
}
