
<?php
$conn = new mysqli("localhost","root","","dbphp7");
if($conn->connect_error){

    echo ucwords("Error: ") . $conn->connect_errno;
    exit();
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios ");


?>

