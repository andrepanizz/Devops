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
endif;
echo "Conectado com Sucesso ao Banco de Dados!";

/////////////////////////////////////////////////////////////////////////////////////////////////////
$stmt = $conn->prepare(""); //aqui faremos nossos Insert, Update, e Delete 
// aqui faremos o Bind_Param();
$stmt->bind_param("ss","?, ?");



?>
