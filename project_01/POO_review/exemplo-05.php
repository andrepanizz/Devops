<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../logo/php.png">
    <link rel="stylesheet" type="text/css" href="/Alura-Devops/php7/css/style.css" media="screen"/> 
    <title> Exemplo de Emcapsulamento 02 </title>
</head>
<body>
    <?php
    // Exemplo de Emcapsulamento:

    class Pessoa {
        public $nome = "Ramus Lerdorf";
        protected $idade = 48;
        private $senha = "123456";

        public function verDados(){
            echo $this->nome . "<br/>";
            echo $this->idade . "<br/>";
            echo $this->senha . "<br/>";
        }

    }

$objeto = new Pessoa();
echo $objeto->nome . "<br/>";
//echo $objeto->idade . "<br/>";
//echo $objeto->senha . "<br/>;
echo "<br>";

// vamos chamar o metodo verDados();
$objeto->verDados();

    ?>
    
</body>
</html>
