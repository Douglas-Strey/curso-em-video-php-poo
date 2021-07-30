<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 - POO</title>
</head>

<body>
    <?php
    require_once 'Caneta.php'; // aqui importamos a classe.
    $c1 = new Caneta(); // aqui instanciamos a classe que criamos no arquivo.
    $c1->cor = "Azul"; // aqui estou modificando o valor do atributo.
    $c1->ponta = 0.5;
    $c1->destampar(); // chamando um método que modifica um atributo.

    $c1->rabiscar(); // Podemos chamar também o método

    /* var_dump($c1); */

    $c2 = new Caneta();
    $c2->cor = "Verde";
    $c2->carga = 50;
    $c2->tampar();
    ?>
</body>

</html>