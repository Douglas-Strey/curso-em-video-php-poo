<?php

abstract class Pessoa
{
    private $nome;
    private $idade;
    private $sexo;

    public final function fazerAniver()
    {
        $this->idade++;
    }
}
