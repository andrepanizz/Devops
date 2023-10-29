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
    echo substr_compare("abcdef","bc", 1 , 2) . "<br/>"; // retorna: 0;
    echo substr_compare("abcdef","de", -2, 2) . "<br/>"; // retorna: 0;
    echo substr_compare("abcdef","bcg",1 , 2) . "<br/>"; // retorna: 0;
    echo substr_compare("abcdef","BC", 1, 2, true) . "<br/>"; // retorna: 0;
    echo substr_compare("abcdef","bc",1, 3); // retorna 1;
    echo substr_compare("abcdef","cd", 1, 2); // retorna: -1;
    echo substr_compare("abcdefg","abc",5, 1); //retorna warning;
    
    // como exemplo vamos criar uma functions para melhor entendimento:
    function contains_substr($mainStr, $str, $loc = false)
    /* Passando 02 parametros:
       $mainStr: A string principal a ser comparada;
       $str: A segunda String a ser comparada;
       $loc: A posição inicial para comparação. Se negativo, inicia contanto da final string */
    {
        if($loc === false) return (strpos($mainStr, $str) !== false);
        /* a function strpos()
        se o parametro $loc for falso (comparador de identidade e valor), ira retornar:
        Na sintaxe demonstrada acima, temos “mainStr” como a string
        que será pesquisada. O “str” é o termo que será procurado 
        na string que determinamos previamente.
        -> esses valores serão passados por parametro quando chamarmos a function contains_substr();
        */
        if(strlen($mainStr) < strlen($str)) return false;
        /* Se o tamanho do parâmetro #mainStr o tamanho for menor que $str retorna falso pra mim!*/
        if($loc + strlen($str)  > strlen($mainStr)) return false;
        /* Se o parâmetro que ja e falso $loc, tamanho da String $str for Maior que o tamanho
           do parametro $mainStr, retorna falso pra mmim!;*/
        return (strcmp(substr($mainStr,$loc, strlen($str)), $str) == 0); 
        // nota do strcmp: Comapração de strings binarias seguras:
        /*'$var1 não é igual a $var2 em uma comparação de strings
           com distinção entre maiúsculas e minúsculas';
           -> substr(): retorna parte de uma string
           */
    } // Fim da function:

    echo "<br/>";
    echo "<hr>";
    
    ?>
    <!-- Fim do Arquivo -->
<script src=""></script>    
</body>
</html>