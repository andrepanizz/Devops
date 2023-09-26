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
require_once("./config.php");

session_unset($_SESSION['nome']); //Limpa variaveis de Sessão;

echo $_SESSION['nome'];

session_destroy(); // limpa a variavel e remove o usuario;

?>
   
</body>
</html>
