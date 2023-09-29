<?php
$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");
/** @param colocando um identificador daquele paramentro unico, 
 *  vamos criar 02 variaveis de login e senha:
 */
$login = "jose";
$password = "1234567890";

$stmt->bindParam("LOGIN", $login);
$stmt->bindParam("PASSWORD", $password);  
// utilizamos o LOGIN e a Senha, passando as variaveis e os detalhes;

$stmt->execute();
echo "Inserido OK!";

?>
