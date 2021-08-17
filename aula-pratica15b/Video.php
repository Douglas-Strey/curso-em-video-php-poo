<?php

require_once 'AcoesVideo.php';

class Video implements AcoesVideo
{
    private $titulo;
    private $avaliacao;
    private $views;
    private $curtida;
    private $reproducao;

    public function __construct($titulo)
    {
        $this->titulo = $titulo;
        $this->avaliacao = 1;
        $this->views = 0;
        $this->curtida = 0;
        $this->reproducao = false;
    }

    public function play()
    {
        $this->reproducao = true;
    }

    public function pause()
    {
        $this->reproducao = false;
    }

    public function like()
    {
        $this->curtidas++;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getAvaliacao()
    {
        return $this->avaliacao;
    }

    public function getViews()
    {
        return $this->views;
    }

    public function getCurtida()
    {
        return $this->curtida;
    }

    public function getReproducao()
    {
        return $this->reproducao;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function setAvaliacao($avaliacao)
    {
        $this->avaliacao = $avaliacao;
    }

    public function setViews($views)
    {
        $this->views = $views;
    }

    public function setCurtida($curtida)
    {
        $this->curtida = $curtida;
    }

    public function setReproducao($reproducao)
    {
        $this->reproducao = $reproducao;
    }
}
