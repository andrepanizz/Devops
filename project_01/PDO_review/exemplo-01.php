<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Mysqli_connected</title>
</head>
<body>
    <?php

// a função mysqli_connect:
///////////////////////////////////////////////////////////////////////////////////
$host = "localhost";
$dbname = "dbphp7";
$user = "root";
$senha = "";

$conection = mysqli_connect($host, $dbname, $user, $senha);
if(isset($conection)):
    echo "conexão estabelecida com sucesso!";
endif;

  


?>
</body>
</html>
