<?php

require_once 'Models/Pessoa.php';

class Funcionarios extends Pessoa
{
    private $setor;
    private $trabalhando;

    public function mudarTrabalho()
    {
        $this->trabalhando != $this->trabalhando;
    }

    public function getSetor()
    {
        return $this->setor;
    }
    public function setSetor($setor)
    {
        $this->setor = $setor;
    }

    public function getTrabalhando()
    {
        return $this->trabalhando;
    }
    public function setTrabalhando($trabalhando)
    {
        $this->trabalhando = $trabalhando;
    }
}
