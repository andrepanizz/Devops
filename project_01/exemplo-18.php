<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis de Sessions</title>
</head>
<body>
    <?php
    /** @param Variaveis de Sessão: */
session_start();
// podemos tambem fazer um require_once de um arquivo chamado config.php


$_SESSION["nome"] = "Teste de Session";

    



    ?>
   
</body>
</html>
