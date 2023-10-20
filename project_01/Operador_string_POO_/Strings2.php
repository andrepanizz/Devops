<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exemplo de String em PHP t</title>
</head>
<body>
<?php
// Strings no PHP, formatação:
#variavel:
$frase = "esta e uma nova frase!";
$frase1 = ucwords($frase);
if(isset($frase1)):
  echo $frase . "<br>";
  echo "<hr>";
endif;

$frase2 = ucfirst($frase);
if(isset($frase1)):
  echo $frase2 . "<br>";
  echo "<hr>";
endif;

$frase3 = strtoupper($frase);
if(isset($frase3)):
    echo $frase3 . "<br>";
    echo "<hr>";
endif;

$frase4 = strtolower($frase);
if(isset($frase4)):
  echo $fraser4 . "<br>";
  echo "<hr>";
endif;
$frase5 = "texto de exemplo <br/>";
echo $frase1 ." " . $frase2 ." " . $frase3 . " " . $frase4 . " ". $frase5 . "<br/>";
echo "<hr>";


?>
  
</body>
</html>

