!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoLoad em PHP</title>
</head>
<body>
    <?php
/*Note que e importante o arquivo ter o mesmo nome da classe;
A função autoload carrega todas as classes assim quando definimos
*/
<?php

/** @param use como utilizar as classes: Automovel.php, Delrey.php */
    //temos uma função do PHP que vai receber um parametro:
    // ela vai receber um parametro que e o nome da classe que foi chamada:

    function __autoload($nomeClasse){
        require_once($nomeClasse);
        //var_dump($nomeClasse);
    }

//instanciamos a classe:

$carro = new DelRey();
// chamamos o metodo: 

$carro->acelerar(80);




?>
</body>
</html>
