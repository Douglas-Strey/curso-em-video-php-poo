<?php

require_once 'Animal.php';

class Peixe extends Animal
{
    private $corEscama;

    public function locomover()
    {
        echo "<p>EU TO NADANDO RÁPIDOOOOO</p>";
    }
    public function alimentar()
    {
        echo "<p>Comendo alguinhasss</p>";
    }
    public function emitirSom()
    {
        echo "<p>Blup blup blup</p>";
    }
    public function soltarBolha()
    {
        echo "<p>Soltei uma bolha ihull</p>";
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
