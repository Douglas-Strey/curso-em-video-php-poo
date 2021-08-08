<?php
require_once 'Models/Aluno.php';
require_once 'Models/Funcionarios.php';
require_once 'Models/Professor.php';

$p1 = new Pessoa();
$p2 = new Aluno();
$p3 = new Professor();
$p4 = new Funcionarios();

$p1->setNome("Pedro");
$p2->setNome("Marias");
$p3->setNome("Lucas");
$p4->setNome("Lexi");

print_r($p1);
