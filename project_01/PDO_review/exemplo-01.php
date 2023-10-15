
<?php
$conn = new mysqli("localhost","root","","dbphp7");
if($conn->connect_error){

    echo ucwords("Error: ") . $conn->connect_errno;
    exit();
}
$stmt = $conn->query("");
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(? , ?)");

//exemplo com bind_param;
$stmt->bind_param("ss","user","12456");
// comando execulte;
$stmt->execute();




?>

