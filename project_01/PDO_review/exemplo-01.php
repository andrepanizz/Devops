<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Exemplo-01t</title>
</head>
<body>

<?php
# variavais:
$hostname = "localhost";
$usuario = "root";
$password = "";
$dbname = "dbphp7";
$port = "3306";
$socket = NULL;

$conn = new mysqli($hostname, $usuario, $password, $dbname, $port, $socket);

if($conn->connect_error):
    echo strtoupper("Não foi Possivel conectar ao  Banco de Dados <br/>") . $conn->connect_errno;
    exit or die();
endif;
echo "<br/>";
echo strtoupper("<i><center> Conectado com Sucesso ao Banco de Dados!</center></i>");
echo "<br/>";
echo "<hr>";


$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha)VALUES (?, ?)"); //aqui faremos nossos Insert, Update, e Delete 
$stmt->bind_param("ss",$user, $senha); //ele espera os tipos de dados das interrogações;

$user = "user";
$senha = "123456";

$stmt->execute();
// aqui faremos o Bind_Param();
//$stmt->bind_param("ss","?, ?");
?>

    
</body>
</html>