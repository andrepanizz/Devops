<?php
//strings em PHP formatadores:

/*
-> Funções uteis para arrays:


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
// 



?>


