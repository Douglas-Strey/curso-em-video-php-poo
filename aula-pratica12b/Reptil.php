<?php

require_once 'Animal.php';

class Reptile extends Animal
{
    private $corEscama;

    public function locomover()
    {
    }
    public function alimentar()
    {
    }
    public function emitirSom()
    {
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
