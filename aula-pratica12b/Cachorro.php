<?php

require_once 'Mamifero.php';

class Cachorro extends Mamifero
{
    public function enterrarOsso()
    {
        echo "<p>Enterrando osso</p>";
    }
    public function abanarRabo()
    {
        echo "<p>Abanando rabo</p>";
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
        echo "<p>Au Au au</p>";
    }
}
