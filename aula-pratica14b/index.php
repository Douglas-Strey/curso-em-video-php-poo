<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula Prática 14b</title>
</head>

<body>
    <pre>
    <?php
    // Dessa forma se o objeto instanciar uma classe que tem o mesmo nome do arquivo, o require_once é feito automatico.
    spl_autoload_register(function ($classNome) {
        require_once $classNome . '.php';
    });

    $v[0] = new Video("Aula Teórica 14a");
    $v[1] = new Video("Aula Prática 14b");

    print_r($v);
    ?>
    </pre>
</body>

</html>