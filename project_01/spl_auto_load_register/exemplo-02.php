<?php

require_once("config.php");

echo $_SESSION["nome"];

/** @param destroys   */
//session_unset($_SESSION["nome"]);
//session_destroy();

?>