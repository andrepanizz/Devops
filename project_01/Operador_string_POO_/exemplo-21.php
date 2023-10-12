<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../css/style.css"/>
  <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen"/> 
  <title>Exemplo 21 em PHP </title>
</head>
<body>
  <br>
  
</body>
</html>


<?php
// para exibir todas as functions para sessions
require_once("config.php");
session_save_path();
echo "<br>";
var_dump(session_status());
switch(session_status()){
  
  case PHP_SESSION_DISABLED:
  echo "se as sessões estiverem desabilitadas.";
  break;
  case PHP_SESSION_NONE:
  echo "se as sessões estiverem habilitadas, mas nenhuma existir.";
  break;
  case PHP_SESSION_ACTIVE:
  echo "se as sessões estiverem habilitadas, e uma existir.";
  break;
  
  
}

?>
