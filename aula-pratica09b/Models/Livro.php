<?php

require_once 'Models/Pessoa.php';
require_once 'Controller/Publicacao.php';

class Livro implements Publicacao
{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    public function detalhes()
    {
    }

    function __construct($titulo, $autor, $totPaginas, $leitor)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->leitor = $leitor;
    }

    function getTitulo()
    {
        return $this->titulo;
    }
    function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    function getAutor()
    {
        return $this->autor;
    }
    function setAutor($autor)
    {
        $this->autor = $autor;
    }

    function getTotPaginas()
    {
        return $this->totPaginas;
    }
    function setTotPaginas($totPaginas)
    {
        $this->totPaginas = $totPaginas;
    }

    function getPagAtual()
    {
        return $this->pagAtual;
    }
    function setPagAtual($pagAtual)
    {
        $this->pagAtual = $pagAtual;
    }

    function getAberto()
    {
        return $this->aberto;
    }
    function setAberto($aberto)
    {
        $this->aberto = $aberto;
    }

    function getLeitor()
    {
        return $this->leitor;
    }
    function setLeitor($leitor)
    {
        $this->leitor = $leitor;
    }

    public function abrir()
    {
        $this->aberto = true;
    }

    public function fechar()
    {
        $this->aberto = false;
    }

    public function folhear($p)
    {
        if ($p > $this->getTotPaginas()) {
            $this->pagAtual = 0;
        } else {
            $this->pagAtual = $p;
        }
    }

    public function avancarPage()
    {
        if ($this->getPagAtual() > $this->getTotPaginas()) {
            echo "<p>ERRO! Você não pode avançar para a próxima página pois essa que você está já é a ultima.</p>";
        } else {
            $this->pagAtual++;
        }
    }

    public function voltarPage()
    {
        if ($this->getPagAtual() < $this->getTotPaginas()) {
            echo "<p>ERRO! Você não pode voltar a página pois essa que você está já é a primeira.</p>";
        } else {
            $this->pagAtual--;
        }
    }
}
