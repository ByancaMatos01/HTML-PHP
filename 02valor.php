<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio2</title>
</head>
<body>
   <?php
   $nome=isset($_GET["nome"])?$_GET["nome"]: "[não informado]";
   $ano=isset ($_GET["ano"])?($_GET["ano"]):0;
   $sexo =isset($_GET["sexo"])?$_GET["sexo"]:"[não informado]";
   $idade= date("Y") - $ano;
   echo "$nome tem $idade anos é $sexo";


   ?>
</body>
</html>