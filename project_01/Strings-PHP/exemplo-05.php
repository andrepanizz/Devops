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

    $objeto = array("objeto1","objeto2","objeto3");
    echo is_array($objeto) ? 'Array' : 'Não e um array';
    echo "\n";

    $objeto2 = "this is string";
    echo is_array($objeto2) ? 'Array' : 'Não e um array';
    echo "\n" . PHP_EOL;

    // is_resource — Informa se a variável é um resource:
    function isResource ($possibleResource) { return !is_null(@get_resource_type($possibleResource)); }
    
    // is_int  - Informa se a variavel e do tipo inteiro:
    
        if (is_int(23)) :
            echo "is integer\n";
            else :
            echo "is not an integer\n";
            endif;

           var_dump(is_int(23));
           var_dump(is_int("23"));
           var_dump(is_int(23.5));
           var_dump(is_int(true));
    
    // is_string - Informa se a variavel e do tipo String;

            



    


    ?>
    <!-- Fim do Arquivo -->
<script src=""></script>    
</body>
</html>