<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../logo/php.png">
    <title>Document</title>
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
/*

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha)VALUES (?, ?)"); //aqui faremos nossos Insert, Update, e Delete 
$stmt->bind_param("ss",$user, $senha); //ele espera os tipos de dados das interrogações;

$user = "user";
$senha = "123456";

$stmt->execute();

*/
$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");
$data = array();
//andando linha por linha.
// ele vai retornar
while($row = $result->fetch_assoc()){
//O fetch_array ele vai me retornar um array vazio que equivale a false;

//adicionando no meu array vazio:
array_push($data, $row);

//estamos fazendo um push em cada uma das linhas;

}

echo json_encode($data);

?>
    
</body>
</html>


