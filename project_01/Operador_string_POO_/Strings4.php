<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings4</title>
</head>
<body>
    <?php
    echo "texto de string de exemplo para formatação";
    echo "<br>";
    echo "texto de string2 para formatação";
    //colocando tudo dentro de variaveis;
      $texto = "texto de strings";
      $texto1 = ucwords("texto de exemplo para caixa alta primeira letra");
      $texto2 = ucfirst("texto de exemplo strubgs4.php");
      $texto3 = strtoupper("texto de exemplo caixa Uppercase()");
      $texto4 = strtolower("texto de caixa baixa");
      $texto5 = substr($texto1, 4, 5);
      echo "<hr>";


    ?>
</body>
</html>
