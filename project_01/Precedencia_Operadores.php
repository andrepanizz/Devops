<?php
# bloco de Precedencia de operadores com PHP:

$resultado = 10 + 3 / 2;

echo $resultado . "<br>";
/*
Se quiser forçar pra realizar primeiro a soma e mudar a ordem faremos:
$resultado(10 + 3) / 2; resultado sera: 6.5;
*/ 

// Se tivermos um operador Logico, um exemplo:

$result = 10 + 3 / 2 > 5 && 10 + 5 < 3;

echo "<br>";

var_dump($result) . "<br>";


/* O dois (&&) significa se as 2 condições forem verdadeiras o resultado e True
   Se alguma delas for falsa e Falso:
  
  10 + 3 / 2 > 5 && 10 + 5 < 3
  
  tanto a condição da direita, quanto da esquerda - DEVEM SER VERDADEIRAS.
  Caso elas não fossem verdadeiras - False;

   10 + 3 / 2 > 5 || 10 + 5 < 3 
   
   Um ou outra for verdadeira, o resultado será true, porque uma ou outra
   condição e verdadeira.
   
  */


///////////////////////////////////////////////////////////////

?>