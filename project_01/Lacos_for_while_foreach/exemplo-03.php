<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../logo/php.png"/>
    <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen"/> 
    <title>Exemplo de Laço While </title>
</head>
    <!-- Inicio do arquivo -->
<body>
    <h2><center><strong><i> Exemplo de Laço While() </i></strong></center></h2>
    <br><br>
    <hr>
    <?php
  
    /** @param Exemplo 02 de Laço While */
///////////////////////////////////////////////////////////////////
    
    //Neste exemplo pratico de laço:
    // vamos pegar os ultimos 100 anos;
    // vamos utilizar a função Date, para retornar o dia da semana;
    // Enquanto meu $i for maior que o ano atual - 100 decrementa pra mim;

    $number = 200;
    echo ucwords("<i><strong> Qual ano você nasceu  ? </strong></i>");
    $open_select = "<select>" . " ";
    $close_select = "</select>";

    echo $open_select . " ";  
    for($i = date("Y"); $i > date("Y") - $number; $i--): 
        $result =  $i . "<br>";
        echo '<option value="'.$result.'">'. $result .'</option>';
    endfor;
    echo $close_select . "<br>";
    
    //////////////////////////////////////////////////////////////////
       

    ?>
<!-- Fim do Arquivo -->    
</body>
</html>
