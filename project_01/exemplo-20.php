<?php
require_once("config.php");

session_regenerate_id();

$id = ucfirst("O seu novo ID aleatorio de Session e: ") .  session_id() . "<br>";
echo $id;
var_dump($_SESSIION); // mostra o valor de array 


?>