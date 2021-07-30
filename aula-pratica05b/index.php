<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04 - POO</title>
</head>

<body>
    <pre>
    <?php
    require_once 'Caneta.php';

    $c1 = new Caneta("BIC", "Vermelha", 0.5);

    print_r($c1);

    /* $c1->setModelo("Faber Castell"); // Utilizar o set é muito mais seguro
    $c1->setPonta(0.5); // Acessando via método eu posso acessar minha declaração privada
    print "Eu tenho uma caneta {$c1->getModelo()}, de ponta {$c1->getPonta()}"; */
    ?>
    </pre>
</body>

</html>