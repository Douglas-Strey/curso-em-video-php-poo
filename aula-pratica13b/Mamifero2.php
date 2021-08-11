<?php

require_once 'Animal2.php';

class MamiferoSecond extends AnimalSecond
{
    protected $corPelo;

    public function emitirSom()
    {
        echo "<p>Emitindo som de mamífero!</p>";
    }
}
