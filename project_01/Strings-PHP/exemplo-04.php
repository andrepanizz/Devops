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
/* -> Exemplos de referencia Manual do PHP. 
   -> Para maior fixação para o conhecimento amplo:  */

// A function str_compare() - A comparação binaria entre duas strings de um offset até o limite do
// comprimento de caracteres;

# Parametros
/* main_str
        A string principal e comparada

   str
        A segunda string a ser comparada

   offset
        A posição inicial para comparação. se negativo, inicia contato da final da string. 
   Length
        O comprimento da comparação. O valor padrão e maior comprimento entre o comprimento
        de str comparado com o comprimento de main_str menos o Offset */
        
    # a comparação e case_sensitive();
    echo substr_compare('abcdef','bc',1, 2); // retorna: 0;
    echo substr_compare(); // retorna: 
    




?>
    <!-- Fim do Arquivo -->
<script src=""></script>    
</body>
</html>