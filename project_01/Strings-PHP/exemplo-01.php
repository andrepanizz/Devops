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
var_dump($lista2);
echo "<br/>";
echo "<hr>";
//////////////////////////////////////////////////////////////////////////////////////////////////


