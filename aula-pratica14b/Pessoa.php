<?php

abstract class Pessoa
{
    protected $nome;
    protected $idade;
    protected $sexo;
    protected $experiencia;

    protected function ganharExp()
    {
        $this->experiencia++;
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
