<?php
//Alterando dados no Banco de dados Mysql:

$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","");
if($conn == mysqli_connect_error() && mysqli_connect_errno()) {
    throw new Exception(ucfirst("Não foi possivel conectar ao Banco de Dados Mysql" . mysqli_connect_error()));

}else{
    echo ucwords("<center><i><strong>A Conexão com Banco de dados foi estabelecida!</i><strong></center><br><br>");
    echo "<hr>";

}
//utilizaremos aqui o comando UPDATE que altera dados de uma tabela. (tb_usuarios)
$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

// criando as variaveis com os valores para o bindParam;
$login = "joao";
$pass = "qwerty";
$id = 2;
// adicionando:
$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam("PASSWORD",$pass);
$stmt->bindParam("ID",$id);

//executando:
$stmt->execute();

// enviando uma mensagem na tela, com sleep:
sleep(1);
    echo strtoupper("<strong> dados da tabela Alterados com sucesso! </strong>");

?>
