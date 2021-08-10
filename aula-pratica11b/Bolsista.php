<?php

require_once 'Aluno.php';

class Bolsista extends Aluno
{
    private $bolsa;

    public function renovarBolsa()
    {
        echo "<p>Parabéns, sua bolsa foi renovada com sucesso!</p>"; // Aqui estou sobrepondo a função de Aluni.php;
    }

    public function pagarMensalidade()
    {
        echo "$this->getNome é bolsista, sua mensalidade tem desconto!</p>";
    }

    public function getBolsa()
    {
        return $this->bolsa;
    }
    public function setBolsa($bolsa)
    {
        $this->bolsa = $bolsa;
    }
}
