<?php
/* Alterando dados em uma tabela no Banco de Dados */

$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","");
//utilizaremos aqui o comando UPDATE que altera dados de uma tabela. (tb_usuarios)
$stmt = $conn->prepare(""); 
$stmt->execute();
echo strtoupper("<strong> dados da tabela Alterados com sucesso! </strong>");

?>
