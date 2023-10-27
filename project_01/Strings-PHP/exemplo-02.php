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


// mostrar as alterações com var_dump();




?>
<!-- Fim do Arquivo -->
<script src=""></script>
</body>
</html>

