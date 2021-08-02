<?php

require_once 'Lutador.php';
require_once 'Luta.php';

$lutador = array(5);

$lutador[0] = new Lutador(
    "Pretty Boy",
    "Francês",
    31,
    1.75,
    68.9,
    11,
    3,
    1
);
$lutador[1] = new Lutador(
    "Putscript",
    "Brasiliano",
    29,
    1.68,
    57.8,
    14,
    2,
    3
);
$lutador[2] = new Lutador(
    "Snapshadow",
    "Estadunidense",
    35,
    1.65,
    80.9,
    12,
    2,
    1
);
$lutador[3] = new Lutador(
    "Dead Code",
    "Australiano",
    28,
    1.93,
    81.6,
    13,
    0,
    2
);
$lutador[4] = new Lutador(
    "UFOCobol",
    "Brasiliano",
    37,
    1.70,
    119.3,
    5,
    4,
    3
);
$lutador[5] = new Lutador(
    "Nerdaart",
    "Estadunidense",
    30,
    1.81,
    105.7,
    12,
    2,
    4
);

$UEC01 = new Luta();
