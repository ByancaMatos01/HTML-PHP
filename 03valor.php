<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio03</title>
    <?php
    $text = isset($_GET["t"]) ? $_GET["t"] : "Texto generico";
    $tam = isset($_GET["tam"]) ? $_GET["tam"] : "12pt";
    $cor= isset($_GET["cor"]) ? $_GET["cor"] : "#000000";
    
    ?>
    <style>
        span.texto{
            font-size: <?php echo $tam; ?>;
            color:     <?php echo $cor;?> ;
        }
        </style>
</head>
<body>
    <?php
    echo "<span class='texto'>$text</span>";
    ?>
</body>
</html>