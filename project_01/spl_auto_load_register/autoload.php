<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../logo/php.png"/>
    <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen"/> 
    <title> Autoload com PHP </title>
</head>
<body>
    <h2> Trabalhando com Autoload Register SPL_Autoload </h2>    
    <?php
    /** @param use como utilizar as classes: Automovel.php, Delrey.php */
    //temos uma função do PHP que vai receber um parametro:
    // ela vai receber um parametro que e o nome da classe que foi chamada:

    function __autoload($nomeClasse){
        var_dump($nomeClasse);
        require_once($nomeClasse);
        
    }
    
$carro = new DelRey();
$carro->acelerar(80);



    ?>
</body>
</html>