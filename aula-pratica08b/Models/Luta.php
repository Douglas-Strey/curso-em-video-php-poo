<?php

require_once 'Controller/ControleLuta.php';
require_once 'Models/Lutador.php';

class Luta implements ControleLuta
{
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    private function getDesafiado()
    {
        return $this->desafiado;
    }
    private function getDesafiante()
    {
        return $this->desafiante;
    }
    private function getRounds()
    {
        return $this->rounds;
    }
    private function getAprovada()
    {
        return $this->aprovada;
    }

    // setters
    private function setDesafiado($des)
    {
        $this->desafiado = $des;
    }
    private function setDesafiante($desfi)
    {
        $this->desafiante = $desfi;
    }
    private function setRounds($round)
    {
        $this->rounds = $round;
    }
    private function setAprovada($ap)
    {
        $this->aprovada = $ap;
    }

    public function Luta()
    {
    }

    public function marcarLuta()
    {
    }
    public function lutar()
    {
    }
}
