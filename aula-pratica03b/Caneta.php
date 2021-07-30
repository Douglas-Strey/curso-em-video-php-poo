<?php

class Caneta
{
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada = false;

    public function rabiscar()
    {
        if ($this->tampada == true) {
            echo "Erro! Não posso rabiscar.";
            $this->carga = "80"; // eu posso alterar carga aqui pois rabiscar é um filho de carga
        } else {
            echo "Estou rabiscando...";
        }
    }

    private function tampar()
    {
        $this->tampada = true;
    }

    private function destampar()
    {
        $this->tampada = false;
    }
}
