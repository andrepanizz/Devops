
<?php
$conn = new mysqli("localhost","root","","dbphp7");
if($conn->connect_error){

    echo ucwords("Error: ") . $conn->connect_errno;
    exit();
}
$stmt = $conn->query("");
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(? , ?)");


$stmt->bind_param("ss","user","12456");
$stmt->execute();




?>

