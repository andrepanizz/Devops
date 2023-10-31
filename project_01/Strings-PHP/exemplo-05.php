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
        if(is_string("meu nome e andre")):
            echo "is it a String" . "<br/>";
        else:
            echo "is not an String" . "<br/>";
        endif;

    // verificação se a varivel existe e se e uma string:
    $text0 = "String";
    $text1 = array("um","dois","tres");
    // validação:
    if(isset($text0) && is_string($text0)):
        echo strtoupper("A o conteudo da variavel e:  {$text0} e se trata de um texto");
    else:
        echo lcfirst("A variavel não e valida, e não e do tipo especificado! o tipo e: ") . gettype($text0);
    endif;
    
    // substr_count — Conta o número de ocorrências de uma substring:

    $texto3 = "This is a test";
    echo strlen($texto3); //retorna 14;

    echo substr_count($texto3, 'is'); // retorna 2;

    // the string is reduce to 's is a test', so it prints 1;
    echo substr_count($texto3, 'is', 3);
    
    // the text is reduced to 's i', so it prints 0
    echo substr_count($text, 'is', 3, 3);

    // generates a warning because 5+10 > 14
    echo substr_count($text, 'is', 5, 10);

    // prints only 1, because it doesn't count overlapped subtrings
    $text2 = 'gcdgcdgcd';
    echo substr_count($text2, 'gcdgcd');

    // Count_chars - retorna informação sobre caracteres usados em uma string;

    // exemplo pratico de sua utilização:

    $data = "Two Ts and one F.";

    foreach (count_chars($data, 1) as $i => $val) {
    echo "There were $val instance(s) of \"" , chr($i) , "\" in the string.\n";
    }
    /* There were 4 instance(s) of " " in the string.
     There were 1 instance(s) of "." in the string.
     There were 1 instance(s) of "F" in the string.
     There were 2 instance(s) of "T" in the string.
     There were 1 instance(s) of "a" in the string.
     There were 1 instance(s) of "d" in the string.
     There were 1 instance(s) of "e" in the string.
     There were 2 instance(s) of "n" in the string.
     There were 2 instance(s) of "o" in the string.
     There were 1 instance(s) of "s" in the string.
     There were 1 instance(s) of "w" in the string.   */
// fim dos resultados;

    echo "<br>";
    echo "<hr>";

    // outro exemplo de utilização:
    /* Agora utilizando uma função especifica:
        
        Conta ocorrências de caracteres em uma string multibyte
 * @param string $input dados UTF-8
 * @return array array associativo de caracteres.   */
    
 function mb_count_chars($input) {
    $l = mb_strlen($input, 'UTF-8'); // usamos mb_strlen() passando o parametro e o encoding.
    $unique = array(); // vazio se dermos um vardump.
    for($i = 0; $i < $l; $i++) { // usamos um for
        $char = mb_substr($input, $i, 1, 'UTF-8');
        if(!array_key_exists($char, $unique))
            $unique[$char] = 0;
        $unique[$char]++;
    }
    return $unique; // retorna a variavel $unique
}
// analisando esta function mb_count_chars($input):
/* O que sabemos referente a o que esta function faz que ela passa um parametro;
  -> criamos uma variavel $l, que passa a function mb_strlen();
  -> sobre mb_strlen():  Obtem o valor da string:
  parametros que esta função espera:
  string: A string inicia checando  para o tamanho,
  encoding: O parametro e a codigicação de caracteres. Se for omitido ou Null, o valor
  da codificação de caracteres interna será usada.

  -> mb_substr($input, $i, 1, 'UTF-8);
  -> usamos um for()
  */


    ?>
    <!-- Fim do Arquivo -->
<script src=""></script>    
</body>
</html>