<?php
// exemplo utilizando a função spl_autoload_register(1° forma function normal);
// exemplo utilizando a função spl_autoload_register(2° forma via função anonima);

//Vamos criar uma pasta com a palavra chave abstratas:

//Vamos criar uma pasta com a palavra chave abstratas:
/** @param use uma função que nos auxilia que conseguimos registrar mais de uma função, como funções de auto-load;
 * spl_autoload_register();
 */

 // vamos criar uma função pra incluir classes ()
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
$carro->acelerar(80);
?>


?>
