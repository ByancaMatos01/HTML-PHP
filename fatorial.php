<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $v = $_GET["val"] ? $_GET["val"] : 1;
    echo "<h1>Calculando o fatorial de $v";
    $c = $v;
    $fat = 1;
    do {
        $fat = $fat * $c;
        $c--;

    } while($c>=1);
    echo "<h2> $v !=$fat";
    ?>
    <p><a href="exercicio.html">voltar</a></p>
</body>
</html>