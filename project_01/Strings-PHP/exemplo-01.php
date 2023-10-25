<?php

/*
-> Funções uteis para arrays:
-> temos varios exemplos de functions para string aqui:
-> Melhores praticas de como usa-las:
*/
//podemos acessos os elementos de um array desta forma:
    $lista = ['a', 'b'];
    $lista[0]; // 'a' indice começa em 0;
    $lista[1];

//Depois que o array e criado podemos indexar valores desta forma:
    $lista1 = ['a','b'];
    $lista1[] = 'c';

/*
$lista == [
    "a",
    "b",
    "c",
]

?>
// Se quisermos adicionar itens no inicio do array podemos usar a function: array_unshift();
*/
$lista2 = ['b', 'c'];
array_unshift($lista2, 'a');
array_push($lista2, 'd');
var_dump($lista2); // ['a','b','c','d'];
echo "<br/>";
echo "<hr>";
// Para contar quantos itens um array tem, voce pode usar a função interna count();
//////////////////////////////////////////////////////////////////////////////////////////////////
$lista3 = ['a','b'];
echo count($lista3); // 2

/* Ou verificar se um array contem um valor especifico */
$lista4 = ['a','b'];
in_array('b', $lista4); // retorna true;

/* Se alem de confirmar a existencia, você precisa saber o indice, use array_search() */

$lista5 = ['a', 'b'];
array_search('b', $lista5); // 1

////////////////////////////////////////////////////////////////

// Verificadores de Arrays:
    $a = array("chave" => "valor");
    is_array($a); // verifica se a variavel e um array;

// remove valores duplicados de um array();
    $b = array("" => "");
    array_unique($b);
// pesquisa um valor no array e retorna a chave;
    $c = array("cerveja" => "skol", "cerveja" => "sol", "cerveja" => "Antartica");
    array_search("cerveja", $c); // retorna a chave:
// Inverte um array:
    $d = array("zero","um", "dois", "três", "quatro", "cinco", "seis", "sete", "oito", "nove", "dez");
    array_reverse($d); // retorna ("dez", "nove", "oito", "sete", "seis", "cinco", "quatro", "três", "dois", "um", "zero")
// reduz um array a um unico valor usando uma function callback:
    # este exemplo esta sendo tirado do PHP.net:

    // precisamos criar a function de callback;
    function sum($carry, $item){

        $carry + $carry = $item;
        return $carry;

    }
    //criação de um array de numeros:
    $a = [1, 2, 3, 4, 5]; // 4 posições.
    $b = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    $result = count($a); // 4 
    echo "<br/>";
    echo "<hr>";
    var_dump(array_reduce($a, "sum")); //int(15)
    gettype($a); // tipo e array[];

/* Aplica uma funcão de callback a cada item no array.
    Normalmente usado para criar um novo array modificando os
    valores de um array existente, sem altera-lo.
    Aplica uma função em todos os elementos  dos arrays dados:
*/
   function cube($n){

    //passando como parametro uma variavel vazia;
    var_dump($n);
    // ela ira retornar:
    return ($n * $n * $n );   // n Multiplicado em 3 X;

   }
   // criamos um array:
   $a1 = array(1, 2, 3, 4, 5);
   $b1 = array_map('cube', $a1); // chamamos a function 'cube()' passando o array.
   print($b1);
   echo "<br/>";
   echo "<hr>";

// array_filter para filtrar um array para um unico valor usando uma function de callback:

   function Impar($var){
    // retorna se o inteiro informado for Impar;
    return $var & 1;
   }

   function Par($var){

    // retorna se o inteiro informado for Par;

    return $var & 2;
   }

   $array1 = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5, 'f' => 6);
   $array2 = array(6,7,8,9,10,11,12);
   $array3 = array(13, 14, 15, 16, 17, 18);

   $mixed = ksort($array3); // a function ksort e sort ordena e desordena a ordem dos arrays


   echo "Estes são os numeros Impares: \n" . MSG_EOF;
   print_r(array_filter($array1, 'Impar')); //retorna [a] => 1, [b] => 3, [c] => 5;
   echo "Estes são os numeros Pares: \n" . MSG_EOF;
   print_r(array_filter($array2, 'Pares')); // retorna [0] => 6, [2] => 8, [4] => 10, [6] => 12;
   echo "<br>";
   echo "<hr>";

// max() obtem o valor maximo contido dentro de um array:
$array4 = array(1,2,3,4,5,6,7,8,9,10,11,12,30);
$maximum = max($array4);
print_r($maximum); // retorna o valor maximo do array que e 30;

// min() obtem o valor minimo contido dentro de um array:

$array5 = array(0 , 1 , 2 , 3 , 4 , 5 , 6 , 7 , 8 , 9 , 10 , 11 ,12 , 30);
$minimum = max($array5);
print_r($minimum); // retorna o valor minimo do array que e 0;
echo "<br>";
echo "<hr>";

// array_rand() obtem um numero aleatorio do array, parecido com a function rand();
$array6 = array(0, 2, 4, 6, 8, 10, 11);
$random = array_rand($array6);
print_r($random); // retorna aleatoriamente;

//array-count_values conta todos os valores no array:
$array7 = array("um" => 1, "dois" => 2, "tres" => 3, "quatro" => 4, "cinco" => 5);
array_count_values($array7); // isto retornara todos as contagens de array;
echo "<br/>";
// array_shift(), o mesmo que array_pop, mais remove o primeiro item em vez do ultimo:

$meuArray = array("item1", "item2", "item3", "item4", "item5");
$remove = array_shift($meuArray); //remove o item1;
print_r($remove);
echo "<br/>";

// sort Ordena um array:
$meucubo = array("cubo1" => 1, "cubo2" => 2, "cubo5" => 5, "cubo9" => 9, "cubo6" => 6);
$ordena = sort($meucubo);
print_r($ordena);
echo "<br/>";
echo "<hr>";

// ksort Classifica um array na ordem Inversa:

$meucubo2 = array("cubo1" => 1, "cubo2" => 2, "cubo3" => 3, "cubo4" => 4, "cubo5" => 5);
$desordena = sort($meucubo2);
print_r($desordena);
echo "<br/>";
echo "<hr>";
    
// Implode Transforma um array em uma String:

$meuArray_1 = array("andre"," ", "edvaldo", " ", "enrique", " ", "debora", " " , "rebecca", " ", "melissa", " ", "Neide");
$minha_string = implode($meuArray_1);
print_r(ucwords($minha_string)); // ele ira retornar "andre edvaldo enrique debora rebecca melissa neide" String
echo "<br>";
echo "<hr>";

// Explode Transforma uma String em um Array():
$meuArray_2 = array();
$minha_string_2 = "Eu gosto de sushi e como todos os dias em um bar japones";
$convertida = explode("|", $minha_string_2); // podemos setar delimitares aqui; no terceiro parametro;
print_r($convertida);
echo "<br>";
echo "<hr>";

/*  podemos usar tambem arrays associativos no PHP 7 com chave e valor: */

$lista_frutas = array("melão" => "verde", "laranja" => "orange", "maça" => "vermelha");
$list_seq = array('primeiro' => 'a', 'segundo' => 'b', 'terceiro' => 'c');

$lista_frutas['melão']; // verde;
$lista_frutas['laranja']; // orange;
$list_seq['primeiro']; // a;
$list_seq['segundo']; // b;

/* Posuimos muitas funções uteis para Arrays Associativos:   */

//array_key_exists() verifica se existe uma chave no array:

    $busca_array = array("primeiro" => 1, "segundo" => 4);
    if (array_key_exists("primeiro", $busca_array)) {
        echo "O elemento 'primeiro' está no array!";
    }
    
    $busca_array2 = array("quarto" => 4, "quinto" => 5);
    if(array_key_exists("quinto", $busca_array2)):
        echo "O elemento 'Quinto' esta no array: {$busca_array2[1]}";
    endif;
// O array_key_exists procurará pela chave na primeira dimensão apenas. chaves aninhadas em arrays
//multidimensionais não serão encontrados;


$search_array = array('primeiro' => null, 'segundo' => 4);

// retorna false;
isset($search_array['primeiro']); // se existir;

// retorna true;
array_key_exists('primeiro', $search_array);

//array_keys() obtem todas as chaves do array:
/*  Retorna todas as chaves ou uma parte das chaves de um array */
$array_20 = array(0 => 100, "cor" => "vermelho");
print_r(array_keys($array_20)); // 

$array_22 = array("azul", "vermelho", "verde", "azul", "azul");
print_r(array_keys($array_22, "azul")); //

$array_23 = array("cor"     => array("azul", "vermelho", "verde"),
               "tamanho" => array("pequeno", "medio", "grande"));
print_r(array_keys($array_23)); //

//array_values() obtem todos os valores do array:

$array_21 = array("tamanho" => "G", "cor" => "dourado");
print_r(array_values ($array_21)); // retorna: array ([0] => 'G'  [1] =>  'dourado');
echo "<br/>";
$arrays_01 = ["tamanhos" => "P", "cor" => "amarelo"];
print_r(array_values($arrays_01)); // retorna: array ([0] => 'P'  [1] => 'amarelo');
echo "<br>";
echo "<hr>";

// asort() Classifica um array associativo por valor:
/* 
-> SORT_REGULAR - Compara elementos normalmente; os detalhes são descritos na seção Operadores de comparação;
-> SORT_NUMERIC - Compara os elementos como numerico.
-> SORT_STRING  - Compara os elementos como strings. 
-> SORT_LOCALE_STRING - Compara os elementos como strings, com base na localidade atual. A localidade
pode ser alterada usando setlocale();
-> SORT_NATURAL - Compara os elementos como Strings usando "Ordenação natural" como natsort();
-> SORT_FLAG_CASE - Pode ser combinada (usando o operador bit a bit OR) com SORT_STRING ou
-> SORT_NATURAL para ordenar strings sem fazer a distinção entre maiusculas e minusculas;

exemplo de utilizaçção:
*/ 
$frutas = array("d" => "Limão", "a" => "Laranja", "b" => "Banana", "c" => "Maça"); // array de [0][1][2] 3 posições;
asort($frutas); // ordenação;
// fazendo um foreach:
    foreach ($frutas as $chave => $valor):
        echo "$chave = $valor\n";
    endforeach;
echo "<br>";
echo "<hr>";
/* Podemos usar variação como outros exemplos que temos acima:
   O segundo parametro opcional flags pode ser modificado o comportamento da ordenação usando os valores; */
$int_flag = 4;
$frutas1 = array("f" => "Morango", "w" => "Pera", "y" => "Carambola", "z" => "Abacaxi");
asort($frutas1,  $int_flag = SORT_STRING);

foreach($frutas1 as $key => $value):
    echo "$key = $value\n";
endforeach;


// arsort() Classifica um array associativo em ordem descrescente por valor:


// ksort() Classifica um array associativo por chave:


// krsort() Classifica um array associativo por ordem decrescente por chave:




?>


