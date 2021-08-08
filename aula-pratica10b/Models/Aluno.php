<?php
require_once 'Models/Pessoa.php';

class Aluno extends Pessoa
{
    private $matricula;
    private $curso;

    public function cancelarMatricula()
    {
        echo "<p>A sua matrícula será cancelada!</p>";
    }

    public function getMatricula()
    {
        return $this->matricula;
    }
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;
    }

    public function getCurso()
    {
        return $this->curso;
    }
    public function setCurso($curso)
    {
        $this->curso = $curso;
    }
}
