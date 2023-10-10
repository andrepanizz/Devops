!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../logo/php.png"/>
    <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen"/> 
    <title>Exemplo de Laço FOR </title>
</head>
<body>
    <h2><center><strong><i> Exemplo de Laço de Repetição for,foreach, while ou dowhile() </i></strong></center></h2>
    <br><br>
    <hr>
    <?php
    /** @param Ultimo exemplo de Laço de repetição (for, foreach, While e Do While) */
/** @param Ultimo exemplo de Laço de repetição (for, foreach, While e Do While) */
    //enquanto existir registros no banco faça:
    //exiba na tela:
    // O while, desde que a condição seja verdadeira, ele irá executar meu trecho de codigo

    $condicao = true;

    while($condicao):
        // estaremos utilizando uma função do PHP que pega o valor randomico (rand)
        $numero = rand(1, 7);

        if($numero == 3):
            echo " <br> O numero sorteado foi <strong> Tres: </strong>  . <br>";
            $condicao = false;
        endif;

        echo  "<br>" . $numero;


    endwhile;




    ?>
    
</body>
</html>
