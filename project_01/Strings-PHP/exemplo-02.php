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

// sbstr - retorna uma parte de uma String:

/*nota sobre o uso do substr:
   Se nos parametros Start não for negativo, a string retornanda
   iniciará na posição start em String, começando do Zero.
   Por Exemplo, na string 'abcdef', o caractere na posição
    0 e 'a', o caractere na posição 2 e 'e assim por diante */

// Exemplo usando um inicio Negativo:

$sample1 = substr('abcdef', -1);  // retorna: 'f';
$sample2 = substr('andre', -2);   // retorna: 're';
$sample3 = substr('abcdef',-3,1);  // retorna: 'd';
$sample4 = substr('peixe', 0 );    // retorna: peixe;
//---------------------------------------------------------------
echo substr('abcdef', 1) .    "<br/>"; // retorna: 'bcdef';
echo substr('abcdef', 1, 3) . "<br/>"; // retorna: 'bcd'; 
echo substr('abcdef', 0, 4) . "<br/>"; // retorna: 'abcd'
echo substr('abcdef', 0, 8) . "<br/>"; // retorna: 'abcdef'
echo substr('abcdef', 1, 1) . "<br/>"; // retorna: 'f'

// o acesso a caracteres individuais pode
// ser feito através da indexação;
$texto_sample = 'abcdef';
echo $texto_sample[0]; // 'a';
echo $texto_sample[3]; // 'd';
echo $texto_sample[strlen($texto_sample)-1]; // 'f';
echo "<br>";
echo "<hr>";


// WordWrap - Quebra uma String em um Dado numero de caracteres;
/*
 * Parameters: 
        str = A string de entrada;
        width = A coluna da largura. O padrão e 75.
        break = A linha e quebrada usando o parametro opcional Break. O padrão  e "\n";
        cut =   E setado para true, a string e sempre quebrada na largura especificada ou antes.
        Então se você tem uma palavra que e mais larga que a largura dada, ela e sempre quebrada:
        */
$texto_word = "O rapido marron, raposa pulou o fim do louco cachorro.";
$newtext = wordwrap($texto_word, 20, "<br />\n");
echo trim($newtext);
echo "<br>";
echo "<hr>";
/* O exemplo abaixo irá reproduzir:
    "O rapido marron, raposa<br />
    pulou o fim do louco <br /?
    cachorro.

*/

//rtrim - Retira espaços em branco  (ou outros caracteres) do final da string
// esta função retorna a string com os espaços em branco retirados do final de str:

$palavras = "\t\tThese are a few words";
$bit = "\x09Example string\x0A";
$mundo = "Hello World";

var_dump($palavras, $bit, $mundo);

printf("\n");

$trimmeds = rtrim($palavras);
print($trimmeds);
$trimmeds = rtrim($palavras, " \t");
print($trimmeds);
$trimmeds - rtrim($mundo, "Hdle");
print($trimmeds);
echo "<br>";
echo "<hr>";

// str_pad() - 

$input = "Alien";
echo str_pad($input, 10);                      // retorna "Alien";
echo str_pad($input, 10, "-=", STR_PAD_LEFT);  // retorna "-=-=Alien";
echo str_pad($input, 10, "_", STR_PAD_BOTH);   // retorna: __Alien__;
echo str_pad($input, 6, "___", STR_PAD_RIGHT);  // retorna: Alien__;
echo str_pad($input, 3, "*");    // retorna: Alien*;

echo str_pad($input, 10, "pp", STR_PAD_BOTH ); //ppinputppp;
echo str_pad($input, 6, "p", STR_PAD_BOTH ); //inputp;
echo str_pad($input, 8, "p", STR_PAD_BOTH ); // pinputpp;

// stripos - O oposto de strpos();
// exemplos de utilização:

$findme    = 'a';
$mystring1 = 'xyz';
$mystring2 = 'ABC';

$pos1 = stripos($mystring1, $findme);
$pos2 = stripos($mystring2, $findme);

// Nope, 'a' is certainly not in 'xyz'
if ($pos1 === false):
    echo "A String '$findme' Não foi encontrada em \string '$mystring1'";
endif;

// Note our use of ===.  Simply == would not work as expected
// because the position of 'a' is the 0th (first) character.
if ($pos2 !== false):
    echo "foi encontrada '$findme' in '$mystring2' na posição $pos2";
endif;

// lcfirst - Torna minusculo o primeiro caractere de uma string:

$foo1 = 'Ola mundo'; // or hello world;
$foo1 = lcfirst($foo1);
echo $foo1 . "<br/>";

$bar = 'OLA MUNDO';
$bar = lcfirst($bar);
$bar = lcfirst(strtoupper($bar));  // oLLa MUNDO;
echo "o resultado do retorno de {$foo1} e {$bar} <br/>" . "<br>";
echo "<hr>";

// parsestr() - Converte Strings:
// Nota: Se o segundo parametro result for informado, as variaveis serão gravadas como elementos de array
/*  Exemplo pratico utilizando parsestr() */

// Recomendado:
$str_10 = "primeiro=valor&arr[]=foo+bar&arr[]=baz";
parse_str($str_10, $saida); //note que a variavel saida, será usada pra chamar as strings:
echo $saida['primeiro']; // retorna valor;
echo $saida['arr'][0]; // retorna foo bar;
echo $saida['arr'][1]; // retorna baz

// Descontinuado ou DISCOURAGED:
// parse_str($str_10);
echo $first; // valor;
echo $arr[0];  //  foo bar;
echo $arr[1];  //   baz;


/* Nota Importante ou Important Notice:
 -> Como as variaveis no PHP não podem conter pontos ou espaços em seus nomes, estes são convertidos
  em underlines.

*/




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
echo "<br>";
echo  "<hr>";
// explode: Divide uma string em um array:
// exemplo 01:
$pizza = "pedaço1, pedaço2, pedaço3, pedaço4";
$fatias = explode(" ", $pizza); // espera receber o caractere a ser adicionado para o separador;
echo $fatias[0] . "<br>"; //pedaço1;
echo $fatias[1] . "<br>";//padaço2;

//exemplo 2:
$dados = "foo:*1023::1000::/home/foo:/bin/bash";
list($user,$pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $dados);
echo $user; //imprimira foo
echo $pass; // * 

/* Note sobre a function list:
list — Cria variáveis como se fossem arrays:

parametros:
var:
A variavel;

vars:
outras variaveis.

retorna o array atribuido:
$info = array('Café', 'marrom', 'cafeína');

// Listando todas as variáveis
list($bebida, $cor, $substancia) = $info;
echo "$bebida é $cor e $substancia o faz especial.\n";

// Listando apenas alguns deles
list($bebida, , $substancia) = $info;
echo "$bebida tem $substancia.\n";

// Ou ignoramos os primeiros valores para conseguir apenas o último
list( , , $substancia) = $info;
echo "I need $substancia!\n";

// list() não funciona com strings
list($bar) = "abcde";
var_dump($bar); // NULL
*/


// implode: junta elementos de um array em uma string:
$array_foo = ["ultimo", "email", "telefone"];
var_dump(implode(",",$array_foo));

// Empty String when using an empty array:
var_dump(implode('hello', [])); // string(0) "";

// o separador e Opcional na passagem de parametros:
var_dump(implode(['a', 'b', 'c'])); // string(3) "abc";

// strreplce exemplo pratico de utilização:



// Fornece: <body text='black'>
$bodytag = str_replace("%body%", "black", "<body text='%body%'>");

// Fornece: Hll Wrld f PHP
$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
$onlyconsonants = str_replace($vowels, "", "Hello World of PHP");

// Fornece: você comeria pizza, cerveja e sorvete todos os dias
$frase  = "você comeria frutas, vegetais, e fibra todos os dias.";
$saudavel = array("frutas", "vegetais", "fibra");
$saboroso   = array("pizza", "cerveja", "sorvete");

$novafrase = str_replace($saudavel, $saboroso, $frase);

// Uso do parâmetro count está disponível no PHP 5.0.0
$str_2 = str_replace("ll", "", "good golly miss molly!", $count);
echo $count; // 2

// Ordem de replacement
$str_2     = "Line 1\nLine 2\rLine 3\r\nLine 4\n";
$order_2   = array("\r\n", "\n", "\r");
$replace_2 = '<br />';
// Processes \r\n's first so they aren't converted twice.
$newstr = str_replace($order_2, $replace_2, $str_2);

// Outputs: apearpearle pear
$letters = array('a', 'p');
$fruit   = array('apple', 'pear');
$text    = 'a p';
$output  = str_replace($letters, $fruit, $text);
echo $output;
/////////////////////////////////////////////


// Strireplace - 


// esta função e compativel com dados binarios;




?>
<!-- Fim do Arquivo -->
<script src=""></script>
</body>
</html>
