<?php
// função que gera novamente um ID de session: 
require_once("config.php");

session_regenerate_id();

$id = ucfirst("O seu novo ID aleatorio de Session e: ") .  session_id() . "<br>";
echo $id;

echo "<br>";

var_dump($_SESSION);




?>