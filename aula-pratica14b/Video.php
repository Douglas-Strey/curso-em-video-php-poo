<?php

require_once 'AcoesVideo.php';

class Video implements AcoesVideo
{
    private $titulo;
    private $avaliacao;
    private $views;
    private $curtida;
    private $reproducao;

    public function play()
    {
    }

    public function pause()
    {
    }

    public function like()
    {
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
