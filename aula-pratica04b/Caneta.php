<?php

class Caneta
{
    public $modelo;
    private $ponta;
    private $tampada;

    public function Caneta($m, $c, $p) // Método Construtor, pode ser declarado como __construct() também;
    {
        $this->setModelo = $m;
        $this->setPonta = $p;
        $this->setCor = $c;
        $this->tampar();
    }

    public function tampar()
    {
        $this->tampada = true;
    }

    public function getModelo()
    {
        return $this->modelo;
    }
    public function setModelo($m)
    {
        $this->modelo = $m;
    }

    public function getPonta()
    {
        return $this->ponta;
    }
    public function setPonta($p)
    {
        $this->ponta = $p;
    }

    public function getCor()
    {
        return $this->cor;
    }

    public function setCor($c)
    {
        $this->cor = $c;
    }
}
