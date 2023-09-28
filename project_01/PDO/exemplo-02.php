<?php
//Conectando PHP com MYSQL Server usando PDO;

$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0","sa","");
$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin;");
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($results); //estou jogando um json encode para transformar em json 
echo "<br><br><br>";
echo "</strong><hr></strong>";
// ou se eu quiser percorrer os dados:

/** @param percorrendo usando um foreach */

foreach($results as $row){
    foreach($row as $value){
        echo "<strong>" . $row . ": </strong>" . " " . $value . "<br>";
    }
    echo "<b>===========================================================</b> <br>";
}

