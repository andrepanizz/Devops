<?php

<?php
//Configurando o projeto com um arquivo de configuração:
spl_autoload_register(function($nameClass){
    //vamos falar para o php onde ele deve procurar as nossas classes;
    //criaremos uma variavel:
    $dirClass = "class";
    $filename = $dirClass . DIRECTORY_SEPARATOR .$nameClass.".php"; //normalmente se refere a todo nome do arquivo, a extenção dele e o PAFH
    if(file_exists($filename) === true)) {   //a function file Existes retorna true ou false;
        require_once("$filename");
    }
});

?>


?>
