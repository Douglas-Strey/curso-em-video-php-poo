<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 - POO</title>
</head>

<body>
    <pre>
    <?php
    require_once 'Caneta.php';
    $c1 = new Caneta();
    $c1->modelo = "BIC Cristal";
    $c1->cor = "Azul";
    print_r($c1);
    ?>
    </pre>
</body>

</html>