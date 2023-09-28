<?php
//Ultilizando PDO para conexão;
//PDO - PHP Data Object();

//informamos o DSN - ou Data Search name;
$conn  = new PDO("mysql:dbname=dbphp7;host=localhost", "root", ""); //o tipo de banco, o nome do banco, e onde ele esta, "usuario", "senha";

// begin transaction = inicia uma transação, podemos trabalhar direto com transações;

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");
$stmt->execute();
$results = $stmt->fetchAll(pdo::FETCH_ASSOC); // vai fatiar diferente de fecth_array dentro do nosso while():
    
    /** @param fetch_array or fetch_assoc:
     * 
     * while($row = $result->fetch_array(MYSQLI_ASSOC)){
     * 
     * } */
  
var_dump($results);
echo "<br><br>";

// percorrendo:
foreach($results as $row){

    foreach($row as $key => $value) {
        echo "<strong>" . $key . ":" . " " ." </strong>" . $value . "" . "<br>";
    }
 echo "-------------------------------------------------------------------------  <br>";
}

?>
