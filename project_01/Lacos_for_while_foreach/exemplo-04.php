!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../logo/php.png"/>
    <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen"/> 
    <title>Exemplo de Laço Foreach </title>
</head>
<body>
    <h2><center><strong><i> Exemplo de Foreach  </i></strong></center></h2>
    <br><br>
    <hr>
    <?php

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
    echo "-------------------------------------------------- <br>";

    //agora se quisermos saber em qual posição do array essa informação esta:
        foreach($meses as $index => $mes):
            echo ucwords("<strong> Indice </strong>") . $index . "<br>";
            echo ucwords("<i> O mês e: </i>") . $mes . "<br>";
        endforeach;
    echo "------------------------------------------------- <br>";
    echo "<hr>";
    ////////////////////////////////////////////////////////////////////////////////
    ?>
    <form>
        <!-- Como não coloquei o action o padrão será Get -->
        
        <input type="text" name="nome">
        <input type="date" name="nascimento">
        <input type="submit" value="Enviar">

    </form>

    <?php
    //vamos validar pois o Get ainda não vai pegar:
        if(isset($_GET)):
    /** @param vamos fazer um foreach dentro do nosso $_GET[""] */
    // Qual será a chave [Key] será todos os campos que tem no nosso formulario 'name = Nome' 
    // E o que a pessoa digitou em cada um desses campos vai vir em Value [Value]  
    foreach($_GET as $key => $value):
    echo ucwords("<strong>Nome do Campo:</strong>") . $key . "<br>";
    echo ucwords("<strong>Valor do Campo:</strong>") . $value . "<br>";
    echo "<hr>";
    endforeach;
        endif;
    ?>
   
    ?>
    
</body>
</html>
