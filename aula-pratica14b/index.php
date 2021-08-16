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
    require_once 'Video.php';

    $v[0] = new Video("Aula Teórica 14a");
    $v[1] = new Video("Aula Prática 14b");

    print_r($v);
    ?>
    </pre>
</body>

</html>