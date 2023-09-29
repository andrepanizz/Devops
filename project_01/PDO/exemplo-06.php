<?php

//Trabalhando com Transactions:

$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","");
//vamos abrir uma transaction, e esta transaction esta amarada a nossa conexão e não ao statment:
/** @param  use a variavel da conexão com o metodo begin_transaction*/

$conn->beginTransaction(); //

if($conn == mysqli_connect_error() && mysqli_connect_errno()) {
    throw new Exception(ucfirst("Não foi possivel conectar ao Banco de Dados Mysql" . mysqli_connect_error()));

}else{
    echo ucwords("<center><i><strong>A Conexão com Banco de dados foi estabelecida!</i><strong></center><br><br>");
    echo "<hr>";
}

//iremos deletar o :ID e colocar uma interrogação: (?)
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");
$id = 2;

// note que deletei o bindParam e utilizaremos um array
$stmt->execute(array($id));

/**
 * Como funciona este novo jeito de adicionar parametros:
 * se eu tenho 01, interrogação, este sera o primeiro index do meu array() [0];
 * então vou dizer que o primeiro e o id, no caso se tivessemos mais, seria o proximo item do meu array  idusuario = ? ?
 * 
 * Como abrimos uma transação, eu quero fazer um commit ou um rollback [confirmar ou cancelar]?
 */
//chamaremos a variavel de conexão e cancelaremos, e faremos um Rollback

//$conn->rollBack();
//echo "Não executou o Delete";

$conn->commit();
echo "Executou o Delete";

?>
