<?php
// criar uma variavél de conexão:
// Se fosse na nuvem, me forneceriam o IP ou o endereço deste servidor.

$conn = new mysqli("localhost2","root","","dbphp7");

if($conn->connect_error) {
    echo "ERROR" . mysqli_connect_errno();
}else{
    echo ucfirst("<center><b> Conexão Estabelecida com 127.0.0.1 </b></center>");

}


?>