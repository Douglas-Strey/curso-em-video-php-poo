<?php

require_once 'Video.php';
require_once 'Gafanhoto.php';

class Visualizacao
{
    private $especator;
    private $filme;

    public function __construct($especator, $filme)
    {
        $this->especator = $especator;
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
}
