<?php
/*
Diferença entre aspas simples pra aspas duplas: 

*/
$nome1 = "Hcode";
$nome2 = 'Treinamentos';
$nome3 = "Hcode" . 'Treinamentos' . "S/A";

var_dump($nome1, $nome2);
echo "<br>";
var_dump($nome3);
echo "<br>";

/*
A diferença: se estiver usando aspas duplas:
echo "ABC $nome1";
//////////////////////////////////////////////////////////////////////////////
*/





?>
