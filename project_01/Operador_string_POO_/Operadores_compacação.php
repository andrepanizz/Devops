<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Comparação</title>
</head>
<body>
<?php
//Operadores de Comparação PHP:

$a = 30;
$b = 55;
$c = 0;
var_dump($a > $b);  //Falso
echo "<br>";
var_dump($a < $b);  //Verdadeiro
echo "<br>";
var_dump($a == $b); // um sinal de igual ele atribui valor (==) e sinal de comparação de valor;
echo "<br>";
var_dump($a === $b); //Operador de comparação de valor e tipo. (===) igualdade de identidade.
echo "<br>";
var_dump($a =! $b); // A e diferente de B - estamos validando o valor
echo "<br>";
var_dump($a !== $b); //A e diferente de B - estamos validando o valor e o Tipo

#########################################################################################################################33

// testes com PHP unit. conhecendo o framework.

?>
<script src=""></script>    
</body>
</html>