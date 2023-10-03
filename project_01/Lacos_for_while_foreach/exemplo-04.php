!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Laço Foreach </title>
</head>
<body>
    <h2><center><strong><i> Exemplo de Foreach  </i></strong></center></h2>
    <br><br>
    <hr>
    <?php
    /**@param Exemplo de Laço Foreach */
    /**@param Exemplo de Laço Foreach */
    $meses = array(
        ucwords("Janeiro"),ucwords("fevereiro"),ucwords("Março"),
        ucwords("Abril"),ucwords("Maio"),ucwords("Junho"),ucwords("Julho"),
        ucwords("Agosto"),ucwords("Setembro"),ucwords("Outubro"),ucwords("novembro"),
        ucwords("Dezembro")
    );
    // Para cada: Foreach:
    // 1° No foreach a primeira variavel que ele espera como parametro e nosso array Alvo: $meses;
    // 2° Cada item que ele encontrar o foreach vai criar uma variavel pra esse item que ele encontrou 
    // 3° Dentro das chavés vamos querer exibir o conteudo; 
    foreach($meses as $mes):
        echo "O mês e:  " . $mes . "<br>";
    endforeach;





    ?>
    
</body>
</html>
