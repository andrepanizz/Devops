<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../css/style.css"/>
    <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen"/> 
    <title> Interfaces </title>
</head>
<body>
    <h2> Interfaces </h2>
    <br><br>
    <hr>

<?php
/** @param Exemplo pratico de Interfaces. */

interface Veiculo {

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
    
}
/** @param Ok agora vamos criar uma classe Implementando essa interface Veiculo: */

class Civic {
    
    public function acelerar($velocidade){
        echo strtoupper("<b> O veiculo acelerou a: </b>" . $velocidade . "<b> KM/h </b><br>");

    }
    public function frenar($velocidade){
        echo ucwords("O Veiculo Frenou em uma velocidade de: " . $velocidade . " <b> KM/h </b><br>");

    }
    public function trocarMarcha($marcha){
        echo ucwords("O veiculo engatou  " . $marcha . " marcha, em uma velocidade de <b>225 KM/h </b><br>");
    }

}

$carro = new Civic();

$carro->trocarMarcha(1);
echo "<br>";
$carro->frenar(100);
echo "<br>";
$carro->acelerar(300);

?>
    
</body>
</html>