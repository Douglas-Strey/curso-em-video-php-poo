<?php

require_once 'Video.php';
require_once 'Gafanhoto.php';

class Visualizacao
{
    private $especator;
    private $filme;

    public function __construct($espectador, $filme)
    {
        $this->espectador = $espectador;
        $this->filme = $filme;
    }

    public function getEspectador()
    {
        return $this->espectador;
    }

    public function getFilme()
    {
        return $this->filme;
    }

    public function setEspectador($espectador)
    {
        $this->espectador = $espectador;
    }

    public function setFilme($filme)
    {
        $this->filme = $filme;
    }
}
