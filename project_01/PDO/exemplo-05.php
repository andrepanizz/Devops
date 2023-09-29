<?php
//Deletando os dados no Banco de dados Mysql:

$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","");
if($conn == mysqli_connect_error() && mysqli_connect_errno()) {
    throw new Exception(ucfirst("Não foi possivel conectar ao Banco de Dados Mysql" . mysqli_connect_error()));

}else{
    echo ucwords("<center><i><strong>A Conexão com Banco de dados foi estabelecida!</i><strong></center><br><br>");
    echo "<hr>";

}


?>
