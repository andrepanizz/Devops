<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../logo/php.png">
    <title>Try Catch</title>
</head>
<body>
    
<?php
// Exemplo de Try Catch:
/** @param try Geralmente usamos try catch: colocamos o codigo dentro do Try
 * e capturamos as exceções dentro do catch, o finally vai executar idependente se ouver exceptions
 */
////////////////////////////////////////////////////////////////////////////////////////////////////////

function inverse($x) {
    if (!$x) {
        throw new Exception('Divisão por zero.');
    }
    return 1/$x;
}

try {
    echo inverse(5) . "\n";
} catch (Exception $e) {
    echo 'Exceção capturada: ',  $e->getMessage(), "\n";
} finally {
    echo "Primeiro finaly.\n";
}

try {
    echo inverse(0) . "\n";
} catch (Exception $e) {
    echo 'Exceção capturada: ',  $e->getMessage(), "\n";
} finally {
    echo "Segundo finally.\n";
}

// Execução continua
echo "Olá mundo\n";
/*
O exemplo acima irá imprimir:

0.2
Primeiro finally.
Exceção capturada: Divisão por zero.
Segundo finally.
Olá mundo
*/
?>

</body>
</html>
