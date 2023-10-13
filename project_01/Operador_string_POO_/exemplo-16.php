<!DOCTYPE html>
<html lang="pt-br">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="icon" href="../css/style.css"/>
     <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen"/> 
     <title> Exemplo-16 </title>
     <!-- exemplo 16 em PHP -->
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