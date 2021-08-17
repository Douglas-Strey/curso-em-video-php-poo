<?php

require_once 'Pessoa.php';

class Gafanhoto extends Pessoa
{
    private $login;
    private $totAssistido;

    public function __construct($nome, $idade, $sexo, $login)
    {
        // Aqui estou chamando o construtor da super classe Pessoa
        parent::__construct($nome, $idade, $sexo);
        $this->login = $login;
        $this->totAssistido = 0;
    }

    public function assistirMaisUm()
    {
        $this->totAssistido++;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function getTotAssistido()
    {
        return $this->totAssistido;
    }

    public function setLogin($login)
    {
        $this->login = $login;
    }

    public function setTotAssistido($t)
    {
        $this->totAssistido = $t;
    }
}
