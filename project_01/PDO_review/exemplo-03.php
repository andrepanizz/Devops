<?php

//conectando com PDO;
$db = "mysql:dbname=dbphp7";
$hostname = "host=localhost";
$user = "root";
$password = "";
# preenchendo:
$conn = new PDO("$db;$hostname,$user,$password");

if(isset($conn)){
    echo "<center> Conexão feita com o banco de Dados </center><br/>";
    echo "<hr>";
}

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

//conseguimos fazer o fetch_array();
$stmt->fetchAll();

