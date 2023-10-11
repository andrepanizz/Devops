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
  
    require("./class/Cadastro.php");
    // para apontar o Namespace colocamos a pasta Cliente\Cadastro
    
    use Clientes\Cadastro;
    // vamos criar um objeto da classe Cadastro:

    $cad = new Cadastro();
    $cad->setNome("Djalma Sindeaux");
    $cad->setEmail("djalmahcode.com.br");
    $cad->setSenha("123456");
    //Agora teremos o Metodo registrarVenda funcionando normalmente();
    $cad->registrarVenda(); 

    //testamos: O echo não consegue mostrar um testo
    echo $cad; //magicamente o ToString sera invocado aqui:





    ?>


<script src=""></script>    
</body>
</html>
