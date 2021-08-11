<?php

require_once 'Animal2.php';

class Mamifero2 extends AnimalSecond
{
    protected $corPelo;

    public function emitirSom()
    {
        echo "<p>Emitindo som de mamífero!</p>";
    }
}
