<?php

require_once 'ControleLutador.php';
class Lutador implements ControleLutador
{
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    private function getNome()
    {
        return $this->nome;
    }
    private function getNacionalidade()
    {
        return $this->nacionalidade;
    }
    private function getIdade()
    {
        return $this->idade;
    }
    private function getAltura()
    {
        return $this->altura;
    }
    private function getPeso()
    {
        return $this->peso;
    }
    private function getCategoria()
    {
        return $this->categoria;
    }
    private function getVitorias()
    {
        return $this->vitorias;
    }
    private function getDerrotas()
    {
        return $this->derrotas;
    }
    private function getEmpates()
    {
        return $this->empates;
    }

    private function setNome($nome)
    {
        $this->nome = $nome;
    }
    private function setNacionalidade()
    {
    }
    private function setIdade()
    {
    }
    private function setAltura()
    {
    }
    private function setPeso($peso)
    {
        $this->peso = $peso;
        $this->setCategoria();
    }
    private function setCategoria()
    {
        if ($this->getPeso() <= 52.2) {
            $this->categoria = "Peso pena";
        } elseif ($this->getPeso() <= 70.3) {
            $this->categoria = "Peso leve";
        } elseif ($this->getPeso() <= 83.9) {
            $this->categoria = "Peso Médio";
        } elseif ($this->getPeso() <= 120.2) {
            $this->categoria = "Peso Pesado";
        } else {
            $this->categoria = "Inválido";
        }
    }
    private function setVitorias($vitoria)
    {
        $this->vitoria = $vitoria;
    }
    private function setDerrotas($derrota)
    {
        $this->derrota = $derrota;
    }
    private function setEmpates($empate)
    {
        $this->empate = $empate;
    }


    public function Lutador(
        $nome,
        $nacion,
        $idade,
        $altura,
        $peso,
        $vitoria,
        $derrota,
        $empate
    ) {
        $this->setNome($nome);
        $this->setNacionalidade($nacion);
        $this->setIdade($idade);
        $this->setAltura($altura);
        $this->setPeso($peso);
        $this->setVitorias($vitoria);
        $this->setDerrotas($derrota);
        $this->setEmpates($empate);
    }
    public function apresentar()
    {
        echo "Lutador: {$this->getNome()}.";
        echo "Origem: {$this->getNacionalidade()}.";
        echo "{$this->getIdade()} anos.";
        echo "{$this->getAltura()} metros de altura.";
        echo "Peso: {$this->getPeso()}.";
        echo "Número de vitórias: {$this->getVitorias()}";
        echo "Número de derrotas: {$this->getDerrotas()}";
        echo "Número de empates: {$this->getEmpates()}";
    }
    public function status()
    {
        echo "Lutador: {$this->getNome()}.";
        echo "É um peso {$this->getCategoria()}";
        echo "{$this->getVitorias()} vitórias";
        echo "{$this->getDerrotas()} derrotas";
        echo "{$this->getEmpates()} empates";
    }
    public function ganharLuta()
    {
        $this->setVitorias($this->getVitorias() + 1);
    }
    public function perderLuta()
    {
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    public function empatarLuta()
    {
        $this->setEmpates($this->getEmpates() + 1);
    }
}
