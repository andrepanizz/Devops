<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../logo/php.png"/>
    <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen"/> 
    <title>Exemplo de Laço FOR 2 </title>
</head>
<body>
    <h2><center><strong><i> Exemplo 02 de Laço For. </i></strong></center></h2>
    <br><br>
    <hr>

    <?php
     /** @param Exemplo 02 de Laço de repetição utilizando o FOR */
    // exemplo de um for com o looping infinito:
        for($i = 0; $i < 0; $i--):
            echo " " . $i . "<br>";
        endfor;
        //o apache vai dar Timeout;
        
        ?>



    ?>
    
</body>
</html>
