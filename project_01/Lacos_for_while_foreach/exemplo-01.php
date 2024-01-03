<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../logo/php.png"/>
    <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen"/> 
    <title>Exemplo de Laço FOR.. </title>
</head>
<body>
    <h2><center><strong><i> Exemplo 01 de Laço For </i></strong></center></h2>
    <br><br>
    <hr>
    <?php
     /** @param Exemplo de laço de repetição utilizando o FOR 01: */
    /* $i enquanto o $i for menor que 10 por exemplo. */
    for($i = 0; $i < 10; $i++){

        // o que vamos repetir:
        echo " " . $i . "<br>";
    }
    // Isto irá resultar: 0 até 9;
    echo "<hr>";
    echo "<br>";
    
    for($i = 0; $i < 1000; $i+=5){
        echo " " . $i . "<br>";
    }
    // Imprimira na tela 5 em 5

    // Exemplo com break e continue;
    echo "------------------------------------------------------------------ <br>";
    for($i = 0; $i < 1000; $i+=5):
        if($i > 200 && $i < 800)continue;
            echo " " . $i . "<br>";
        endfor;

    // break o for se ele for igual a 900;
    for($i = 0; $i < 1000; $i+=5):
        if($i === 900)break;
        echo " " . $i . "<br>";
    endfor; 


    ?>
    
</body>
</html>
