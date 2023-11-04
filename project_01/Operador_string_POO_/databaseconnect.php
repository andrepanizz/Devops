<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../css/style.css"/>
    <title>Exemplo de conexão com a base de dados</title>
</head>
<body>
    <h2>Exemplo de Conexão base de dados </h2>
    <br>
    <hr>

    <?php
/** @param realizando a conexão com banco de dados utilizando MySQLi */
$servername = "localhost";
$database = "databasename";
$username = "root";
$password = "";
$port = 3306;

/* @param create connection with Mysql */ 
$conn = 
mysqli_connect($servername, $username, $password, $database, $port);

/** @param check connection  */
if(!$conn){
    die("Connection Failed: ". mysqli_connect_error());
}
echo "<br><br>";
echo strtoupper("<b><center> Database connection has ben successfully ! </center></b><br>");
mysqli_close($conn);

/** @param Fim da conexão com o banco de dados Mysql */

/** @param  Utilizando PDO para conexão com o banco de dados */
/**
 * Criando um arquivo chamado pdoconfig.php
 *  require_once 'pdoconfig.php';
 *  try{
 *      $conn = new PDO(mysql:host=$host;dbname=$dbname
 *      $username,
 *      $password);
 *          echo "Connectado a $dbname em $host com sucesso.";
 *      
 *   Catch (PDOException $pe) {
 *          die("Não foi possivel se conectar ao banco de dados $dbname :") . $pe
 *      >getMessage());
 * }
 */
?>
<script src=""></script>
</body>
</html>



