!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoLoad em PHP</title>
</head>
<body>
    <?php
/*Note que e importante o arquivo ter o mesmo nome da classe;
A função autoload carrega todas as classes assim quando definimos
*/
<?php
// e importante o arquivo ter o mesmo nome da classe
interface Veiculo {

    public function acelerar($velocidade);
    public function frear($velocidade);
    public function trocarMarcha($marcha);
}

abstract class automovel implements Veiculo {
    
    public function acelerar($velocidade) {
        echo "O veiculo acelerou até uma velocidade de: " . $velocidade . "<b> Km/h </b><br>";
    }

    public function frear($velocidade) {
        echo "O veiculo frenou a uma velocidade de: ". $velocidade . "<b> Km/h </b><br>";
    }
    public function trocarMarcha($marcha)
    {
        echo  ucwords("O veiculo engatou a Marcha" . $marcha . "a uma alta velocidade");
    }
    
}

class Delrey extends automovel {
    public function Empurrar(){
        echo "O veiculo Delrey foi empurrado ao engatar a marcha ré! <br>";
    }
//Agora iremos criar um novo arquivo PHP.
  
}



?>




?>
</body>
</html>
