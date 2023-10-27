<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../logo/php.png">
    <title>Strings</title>
</head>
<body>
<!-- Inicio do Arquivo -->
<?php
/* Exemplo de Strings:  */
/* ha muito mais functions internas que você pode usar para trabalhar com strings
este e um pequena lista (não abrange) para mostrar algumas possibilidades:
  TRIM Retira espaço no início e final de uma string
*/

// trim(: remove o espaço em branco no incio e no final um String.

$text = "\t\teste e meu amigo! :)...  ";
$binario = "\x09Exemplo de Strings";
$ola = "Olá mundo";

print("\n");

$trimmed = trim($text);
print("\n");
var_dump($trimmed);

$trimmed = trim("text", "\t.");
var_dump($trimmed);

$trimmed = trim($ola, "hdle");
var_dump($trimmed);

// Trim e ASCII control characteres e no começo e final do $binario;
// de 0 para 31 inclusive
$clean = trim($binario, "\00..\x1F");
var_dump($clean);

// Strtoupper() Transforma uma String em Maiuscula:

$str = "Hoje estou super feliz com minha compra!";
$str = strtoupper($str);
echo $str;  // imprime: hOJE ESTOU SUPER FELIZ COM MINHA COMPRA!;

// Strtolower() Transforma uma String em Minuscula

$string = "Hoje estou Triste!";
$string = strtolower($string);
echo $string; // Imprime: hoje estou triste!;

// Ucwords(): transforma os caracteres de cada texto a primeira letra em caixa alta;
$strings1 = "hoje estou muito alegre!";
$strings1 = ucwords($string1);
echo $string1; // Imprime: Hoje Estou Muito Alegre!

// ucfirst(): Transforma o primeiro caractere em Maiusculo!;
$string2 = "hoje estou andando!!";
$string2 = ucfirst($string2);
echo $string2; //Imprime: Hoje estou andando!!;

// strpos(): encontra a primeira ocorrencia de uma substring na String:

$mystring = 'abc';
$findname = 'a';
$pos = strpos($mystring, $findname); // espera 2 parametros: astring a ser procurado, e o encontrado;
if($pos == false):
    echo "A string" . $findname . "não foi encontrado a string" . $mystring;
elseif($pos == true):
    echo "A string '$findname' foi encontrada" . $mystring;
    echo "e existe a posição" . $pos;
else:
    echo "Nenhum parametro foi encontrado";
    unset($mystring, $findname);
    //limpo as variaveis;
endif;

// explode: Divide uma string em um array:





// implode: junta elementos de um array em uma string:


?>
<!-- Fim do Arquivo -->
<script src=""></script>
</body>
</html>
