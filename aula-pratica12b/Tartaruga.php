<?php

require_once 'Reptil.php';

class Tartaruga extends Reptil
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
        echo "<p>Sei lá que som faz</p>";
    }
}
