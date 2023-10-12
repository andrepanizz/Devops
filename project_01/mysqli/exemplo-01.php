<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../logo/php.png"/>
    <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen"/> 
    <title>função Mysqli connected </title>
    <hr>
    <br>
</head>
<body>
    
</body>
</html>

<?php
// criar uma variavél de conexão:
// Se fosse na nuvem, me forneceriam o IP ou o endereço deste servidor.

$conn = new mysqli("localhost","root","","dbphp7");

if($conn->connect_error) {
    echo "ERROR" . mysqli_connect_errno();
}else{
    echo ucfirst("<center><b> Conexão Estabelecida com 127.0.0.1 </b></center>");

}

// inserindo um comando prepare:

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?)");
$stmt->bind_param("ss",$login,$pass); //espera o tipo de dado da interogação(), e espera os valores que queriamos inserir nas colunas (deslogin, senha);

$login = "user";
$pass = "12345";

$stmt->execute();

$login = "root";
$pass = "!@#$";

$stmt->execute();

# $stmt->bind_result();

?>
