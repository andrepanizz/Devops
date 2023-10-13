<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../css/style.css"/>
    <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen"/> 
    <title>Exemplo-20</title>
    <!-- exemplo de Session_regenerate_ID -->
</head>
<body>
    <br>
    
</body>
</html>


<?php
require_once("config.php");

session_regenerate_id();

$id = ucfirst("O seu novo ID aleatorio de Session e: ") .  session_id() . "<br>";
echo $id;
var_dump($_SESSIION); // mostra o valor de array 


?>
