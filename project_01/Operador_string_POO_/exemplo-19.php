<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../css/style.css"/>
    <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen"/> 
    <title>Sessions</title>
    <!-- Variaveis de Session -->
</head>
<body>
    <h2> configuração do config.php </h2>
<?php
/*ID de Session*/
/* Identificação da sua sessão unica no servidor */
require_once("config.php");

echo session_id();
echo session_unset();
?>

<script src=""></script>
</body>
</html>
    
</body>
</html>
