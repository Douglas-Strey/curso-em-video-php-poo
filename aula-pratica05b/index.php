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
    require_once 'ContaBanco.php';

    $jubileu = new ContaBanco();
    $creusa = new ContaBanco();

    $jubileu->abrirConta("CC");
    $jubileu->setNumConta(1010);
    $jubileu->setDono("Jubileu");

    $creusa->abrirConta("CP");
    $creusa->setNumConta(2020);
    $creusa->setDono("Creusa");

    $jubileu->depositar(300);
    $creusa->depositar(500);

    $creusa->sacar(100);

    $jubileu->pagarMensalidade();
    $creusa->pagarMensalidade();

    $jubileu->sacar(338);
    $creusa->sacar(530);

    $jubileu->fecharConta();
    $creusa->fecharConta();

    print_r($jubileu);
    print_r($creusa);
    ?>
    </pre>
</body>

</html>