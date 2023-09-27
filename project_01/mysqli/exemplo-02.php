<?php

// criar uma variavél de conexão:
// Se fosse na nuvem, me forneceriam o IP ou o endereço deste servidor.

$conn = new mysqli("localhost","root","","dbphp7");

if($conn->connect_error) {
    echo "ERROR" . mysqli_connect_errno();
}else{
    echo ucfirst("<center><b> Conexão Estabelecida com 127.0.0.1 </b></center>");

}
echo "<br>";
echo "<hr>";


//execultando direto em nosso banco de dados:
$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");
$data = array();
// como fazemos para acessar os dados que estão dentro desta variavel:
// Precisamos pegar esta variavel e verificar se existe algum dado dentro dela
// para verificar se tem algum dado dentro do cursor, executaremos o metodo fetch_array()
while($row = $result->fetch_array(MYSQLI_ASSOC)){   /** @param caso queiramos ordernar, e so passar uma constante do mysqli  MYSQLI_ASSOC */

    // ele retorna um dado se ele existir();
    // No caso ele irá retornar um array vazio = que equivale a False;

    //vamos adicionar dentro do array $data, o meu $row:
    array_push($data, $row);
    #var_dump($row);  //para visualizarmos o que tem dentro do array

}

echo json_encode($data);   //estou utilizando json_encode como posso gerar json.
echo "<br>";

# - Documentação do PHP
/*
1 - fetch_array:
2 - fetch_object: traz somente os objetos

*/
?>
