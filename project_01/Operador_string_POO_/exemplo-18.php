<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../css/style.css"/>
    <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen"/> 
    <title>Variaveis de Sessions</title>
    <!--Exemplos de Variaveis de Sessions[] = "text"; -->
</head>
<body>
    <h2><center> Variaveis de Sessions </center></h2>
    <br><br>
    <hr>
    <?php
    /** @param Variaveis de Sessão: */
require_once("./config.php");

session_unset($_SESSION["nome"]); //Limpa variaveis de Sessão;
////////////////////////////////////////////////////////////////

echo $_SESSION["nome"];

session_destroy(); // limpa a variavel e remove o usuario;



    ?>>
<script src=""></script>   
</body>
</html>
