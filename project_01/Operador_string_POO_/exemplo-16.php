<?php

function incluir($nomeClasse)
{
     require_once($nomeClasse);

}
spl_autoload_register("incluir");

$carro = new Delrey();
$carro->acelerar(80);