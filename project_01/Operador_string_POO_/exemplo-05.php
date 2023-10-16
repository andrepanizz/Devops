<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen"/> 
    <link rel="icon" href="../css/style.css">
    <title>Metodos Magicos em PHP Exemplo-01</title>
    <!-- metodos Magicos em PHP -->
</head>
<body>
    <h2><center> Metodos Magicos em PHP </center></h2>
    <br>
<?php
class Endereco {

    private $logradouro;
    private $numero;
    private $cidade;

    /** @param Getters e Seeters */

    public function __construct($a, $b, $c)
    {
        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
        
    }

    /** @param Utilizando o Destruct */

    public function __destruct()
    {
        echo (" <h2> Destruiu o Construtor </h2>");
    }
    /** Toda vez que chamarmos o metodo ele vai serializar os atributos, ou vai serializar um objeto!  */
    public function __toString()
    {
        return $this->logradouro . " ," . $this->numero . " ," . $this->cidade . "<br>";

    }

}
$meuendereco = new Endereco("rua Ademar Saraiva", 123, "Santos");
echo $meuendereco;
?>
 
</body>
</html>