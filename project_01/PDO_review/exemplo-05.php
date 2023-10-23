<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 5 com Review.</title>
    <link rel="icon" href="../logo/php.png">
    <link rel="stylesheet" href="../PDO_review/css-exemplo-04.php/style-example4.css">
</head>
<body>
    <!--PDO Inserindo dados no Mysql -->
    <h2> Exemplo de Insert com o Banco </h2>
    <br>
    <hr>
    <?php
    /** @param vamos começar criando nossa conexão: */
    $conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","");

    $stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");

    $login = 'jose';
    $password = '1234567890';
    $dtcadastro = "cadastro exemplo";
    $idusuario = "user";
    //vamos fazer o Bind_param: para ligar os valores:
    /*
    :LOGIN = $login;
    :PASSWORD = $password;
     */
    /* Importante para cada values que tivermos, devemos passar um bind_param para cada um deles;
     se tivermos inserindo ooutros valores na tabela por exemplo: idusuarios, dtcadastro; e esses
     valores não fossem de AUTO_INCREMENT devemos passar todos;
    */
    $stmt->bindParam(":LOGIN",$login);
    $stmt->bindParam(":PASSWORD",$password);

    //exemplo se tivermos mais parametros:

    $stmt = $conn->prepare("INSERT INTO tb_usuarios (idusuario, dtcadastro, deslogin, dessenha) VALUES (:IDUSUARIO, :DTCADASTEO, :LOGIN, :PASSWORD)");
    $stmt->bindParam(":IDUSUARIO",);
    $stmt->bindParam(":DTCADASTRO",);
    $stmt->bindParam(":LOGIN",$login);
    $stmt->bindParam(":PASSWORD",$password);
    //executando:
    $stmt->execute();

    echo "inserido OK!";
    echo "<br>";
    ?>
    <script src="../JavaScript-Model/model.js"></script>
</body>
</html>