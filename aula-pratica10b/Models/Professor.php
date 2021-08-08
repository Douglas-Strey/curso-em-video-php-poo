<?php
require_once 'Models/Pessoa.php';

class Professor extends Pessoa
{
    private $especialidade;
    private $salario;

    public function ReceberAumento($aum)
    {
        $this->salario += $aum;
    }

    public function getEspecialidade()
    {
        return $this->especialidade;
    }
    public function setEspecialidade($espec)
    {
        $this->especialidade = $espec;
    }

    public function getSalario()
    {
        return $this->salario;
    }
    public function setSalario($sal)
    {
        $this->salario = $sal;
    }
}
