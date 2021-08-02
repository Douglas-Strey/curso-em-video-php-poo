<?php

require_once 'Lutador.php';

class Luta
{
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    // Construtor
    public function Luta()
    {
    }

    public function marcarLuta($l1, $l2)
    {
        if ($l1->getCategoria() == $l2->getCategoria() && $l1 != $l2) {
            $this->aprovada = true;
            $this->desafiada = $l1;
            $this->desafiante = $l2;
        } else {
            $this->aprovada = false;
            $this->desafiada = null;
            $this->desafiante = null;
        }
    }
    public function lutar()
    {
    }

    // Getters
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
}
