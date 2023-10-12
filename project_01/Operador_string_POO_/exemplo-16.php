<!DOCTYPE html>
<html lang="pt-br">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="icon" href="../css/style.css"/>
     <title> Exemplo-16 </title>
</head>
<body>
     
</body>
</html>

<?php

function incluir($nomeClasse)
{
     require_once($nomeClasse);

}
spl_autoload_register("incluir");

$carro = new Delrey();
$carro->acelerar(80);