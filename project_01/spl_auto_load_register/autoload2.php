<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../logo/php.png"/>
    <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen"/> 
    <title>Autoload Registers</title>
</head>
<body>

<?php


function incluir($nomeClasse){
    if(file_exists($nomeClasse . ".php") === true){
        
        require_once($nomeClasse .".php");
        require_once("Automovel.php");
    }else{
        return throw new Exception("Não foi encontrado o arquivo!");
        exit();
    }
}

function incluir2($nomeClasse2){
    if(file_exists($nomeClasse2) === true){
        require_once("abstratas".DIRECTORY_SEPARATOR. $nomeClasse2. ".php");
        require_once("abstratas".DIRECTORY_SEPARATOR.$nomeClasse2.".php");

    }

}


spl_autoload_register("incluir");
$carro = new Delrey();
$carro->acelerar(80) . "<br>";
echo "<hr>";
$carro->frear(100) . "<br>";
echo "<hr>";
$carro->Empurrar() . "<br>";
echo "<hr>";


?>

    
</body>
</html>
<