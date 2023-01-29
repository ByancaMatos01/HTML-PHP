<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="repeticaoexrc2.php" method="get">
            <?php
            $cont=1;
            while($cont<=5){
            echo"Valor $cont: <input type='number' name='v$cont' max='100' min='0' value='0'>";
                $cont++;
            }
            ?>
            <input type="submit" value="Enviar" class="botao">
        
        </form>
</body>
</html>