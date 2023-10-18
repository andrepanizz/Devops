<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../logo/php.png"/>
    <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen"/> 
    <title> Exemplo do DO WHILE 2 </title>
</head>
<body>
    <!-- Exemplo do DO While -->
    <h2> <center>Exemplo Pratico do While 2 </center></h2>
    <br><hr>
    <?php
    $total = 150;
    $desconto = 0.9;

    // do = faça;
    do {
        //pegue o total, e igual a ele mesmo Vezes * o desconto;
        $total *= $desconto;
        //enquanto o total for acima de 100:
    }while($total > 100);

    echo $total;
    /** @param Devemos tomar muito cuidado com o While, se não mudarmos a variavel que ele usa como condição
     * Podemos entrar em um Loop Infinito;
     */
     ?>
    
</body>
</html>
