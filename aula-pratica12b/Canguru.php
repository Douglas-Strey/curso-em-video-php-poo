<?php

require_once 'Mamifero.php';

class Canguru extends Mamifero
{
    public function usarBolsa()
    {
        echo "<p>Usando bolsa</p>";
    }
    public function locomover()
    {
        echo "<p>EU TO CORRENDOOO</p>";
    }
    public function alimentar()
    {
        echo "<p>Mamando.</p>";
    }
    public function emitirSom()
    {
        echo "<p>MIAUUUUUUU.</p>";
    }
}
