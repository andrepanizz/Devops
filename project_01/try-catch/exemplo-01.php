<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../logo/php.png">
    <title>Exemplo de tratamento de erros com Try-Catch</title>
</head>
<body>
    <h2><center><i>Erros com Try Catch Exemplos</i></center></h2>
    <br><br>
    <hr>
    <?php
    /** @param Try exemplo de function com try catch */
    function dividir($x, $y) {
        if ($y == 0) {
            throw new Exception('é uma divisão por zero.');
        }
        $resultado = $x / $y;
        return $resultado;
    };
    
    try {
        echo dividir(2,0)."<br/>";
    } catch (Exception $e) {
        echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    }

    //exemplo pratico da documentação do PHP:
    
    ?>

<script src=""></script>
<script src=""></script>    
</body>
</html>