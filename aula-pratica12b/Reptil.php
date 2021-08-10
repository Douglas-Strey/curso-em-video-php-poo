<?php

require_once 'Animal.php';

class Reptile extends Animal
{
    private $corEscama;

    public function locomover()
    {
        echo "<p>EU TO VOANDO ALTOOOO</p>";
    }
    public function alimentar()
    {
        echo "<p>Eu to comendo muita verdura mermão.</p>";
    }
    public function emitirSom()
    {
        echo "<p>NHIC NHIC</p>";
    }

    public function getCorEscama()
    {
        return $this->corEscama;
    }
    public function setCorEscama($corEscama)
    {
        $this->corEscama = $corEscama;
    }
}
