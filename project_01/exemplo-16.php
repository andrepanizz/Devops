<?php
// exemplo utilizando a função spl_autoload_register(1° forma function normal);
// exemplo utilizando a função spl_autoload_register(2° forma via função anonima);

//Vamos criar uma pasta com a palavra chave abstratas:

//Vamos criar uma pasta com a palavra chave abstratas:
/** @param use uma função que nos auxilia que conseguimos registrar mais de uma função, como funções de auto-load;
 * spl_autoload_register();
 */

 // vamos criar uma função pra incluir classes ()

 function incluirClasse($nomeClasse){
    if(file_exists($nomeClasse . ".php") === true){
        require_once($nomeClasse);
    }

 }

/** @param use Desta forma aqui fizemos dos dois jeitos, tanto declarando uma function e usando
 * uma function anonima */ 
spl_autoload_register("incluirClasse");
spl_autoload_register(function($nomeClasse){
    if(file_exists("abstratas".$nomeClasse.".php") === true){
        require_once($nomeClasse.".php");
    }
});


$carro = new DelRey();
$carro->acelerar(80);



?>
