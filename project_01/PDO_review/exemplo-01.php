<?php
# variaveis de conexão:
$hostname = "localhost";
$usuario = "root";
$password = "";
$dbname = "dbphp7";
$port = "3306";
$socket = NULL;
# Objeto de conexão com o banco de dados;
$conn = new mysqli($hostname, $usuario, $password, $dbname, $port, $socket);
# condicional para conexão!
if($conn->connect_error):
    echo strtoupper("Não foi Possivel conectar ao  Banco de Dados <br/>") . $conn->connect_errno;
    exit or die();
endif;
echo "<br/>";
echo strtoupper("<i><center> Conectado com Sucesso ao Banco de Dados!</center></i>");
echo "<hr/>";

/////////////////////////////////////////////////////////////////////////////////////////////////////
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha)VALUES (?, ?)"); //aqui faremos nossos Insert, Update, e Delete 
$stmt->bind_param("ss",""); //ele espera os tipos de dados das interrogações;
// aqui faremos o Bind_Param();
//$stmt->bind_param("ss","?, ?");
?>
