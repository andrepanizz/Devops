<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../logo/php.png">
    <link rel="stylesheet" type="text/css" href="/Alura-Devops/php7/css/style.css" media="screen"/> 
    <title> Index PHP </title>
    <h2> Index PHP utilizando Namespaces </h2>
    <br>
    <hr>
</head>
<body>
    <?php
    //Agora precisamos Herdar do cadastro principal, mais precisamos informar ao PHP que ela esta em um Namespace:
    //informaremos antes da minha classe qual e o Namespace deste arquivo:
    namespace Cliente;
    //agora utilizaremos uma contra-barra para dizer que e a classe principal cadastro.
    class Cadastro extends \Cadastro {
        public function registrarVenda()
        {
            echo "Foi registrada uma venda para o cliente".$this->getNome();
            echo "<br>";

        }
    }
    ?>
</body>
</html>