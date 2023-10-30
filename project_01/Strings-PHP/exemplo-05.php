<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Strings em PHP - </title>
    <link rel="icon" href="../logo/php.png">
</head>
<body>
    <h2> Exemplo de Strings em PHP </h2>
    <!-- exemplo de arquivo de Strings em PHP -->
    <?php
    /* Aqui estão exemplos de functions de tipos de dados
    -> arrays
    -> strings
    -> variaveis
    -> objetos

    Veremos tambem um pouco de funções de validação de variaveis;
        
    */

    // is_array - Verifica se a variavel e um array();

    $garafa = array('Esta','e','uma','garafa');
    echo is_array($garafa) ? 'Array' : 'Não e Array';
    echo "\n";

    $not_garafa = "Isto não e uma garafa";
    echo is_array($not_garafa) ? 'Array' : 'Não e um Array';
    echo "\n" . PHP_EOL;


    ?>
    <!-- Fim do Arquivo -->
<script src=""></script>    
</body>
</html>