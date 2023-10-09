<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../logo/php.png"/>
    <link rel="stylesheet" type="text/css" href="/Alura-Devops/php7/css/style.css" media="screen"/> 
    <title> Exemplo de Emcapsulamento 03 </title>
</head>
<body>
<h2> Extendendo a Classe Programador </h2>
<br>

<?php
//Programadores extends de uma classe Pessoa:


class Pessoa {
    public $nome  = "Ramus Ledorf";
    protected $idade = 48;
    private $senha = "123456";

    public function verDados(){
        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";

    }
}


class Programador extends Pessoa {
    

        public function verDados(){
        echo get_class($this) . "<br>";
        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        //echo $this->senha . "<br/>";
        
    }

}

$objeto = new Programador();
$objeto->verDados();


?>
