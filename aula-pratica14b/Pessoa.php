<?php

abstract class Pessoa
{
    protected $nome;
    protected $idade;
    protected $sexo;
    protected $experiencia;

    public function __construct($nome, $idade, $sexo)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->experiencia = 0;
    }

    protected function ganharExp($xp)
    {
        $this->experiencia += $xp;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function getExperiencia()
    {
        return $this->experiencia;
    }

    public function setNome($n)
    {
        $this->nome = $n;
    }

    public function setIdade($id)
    {
        $this->idade = $id;
    }

    public function setSexo($sex)
    {
        $this->sexo = $sex;
    }

    public function setExperiencia($xp)
    {
        $this->experiencia = $xp;
    }
}
