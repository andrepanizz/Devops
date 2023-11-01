<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../logo/php.png"/>
    <title> PDO_review connected </title>
</head>
<body>
<?php
// Parameters:
/*
$host = "mysql:host=localhost;";
$db = "dbname=dbphp7";
$user = "root";
$password = "";
$port = "3306";
//Parameters 2:
$hos = "mysql:host=localhost;";
$dbname = "dbname=dbloja";
$users = "root";
$senha = "";
*/

//Connections:
$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","");
var_dump($conn);







?>
<script src=""></script>
</body>
</html>
