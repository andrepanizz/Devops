<?php
/* Como funciona as condicionais no PHP:
Com ela podemos decidir fazer uma coisa ou fazer outra,
com base em uma comparação.

aqui esta um exemplo pratico de como fazer isto:
*/ 
$idade = 17;

if(isset($idade) && $idade > 18):
    echo strtoupper("Voce pode entrar no PUB");
    echo "<br/>";
endif;
// Note que aqui eu verifiquei se a variavel existe primeiro antes de compara-la;
// podemos adicionar um Else para tomar outra decisão:

$idade1 = 17;
if(isset($idade1) && $idade1 > 18):
    echo strtoupper("Você pode entrar no PUB"); // Você pode entrar no PUB;
else:
    echo strtoupper("Voce não pode entrar no PUB"); // Você não pode entrar no PUB;
endif;
// temos 2 maneira de usar o if e else, com chaves ({}), ou com Pontos (:) porém o endif deve constar();
// podemos trabalhar tambem com elseif:

$idade2 = 17;

if(isset($idade2) && $idade2 > 20):
    echo strtoupper("<i> Você pode entrar no PUB  tem mais de 20+ </i>");
elseif($idade2 > 18 ):
    echo strtoupper("<strong> Você tem Mais de 18+ </strong>");
else:
    echo strtoupper("Você não pode entrar pois tem a idade de:  {$idade2} <br/>");
endif;
MSG_EOF;
echo "<br>";
echo "<hr>";
// Note que aqui eu usei mais condicionais certo;

/*  Alem do IF tambem temos a declaração do Switch: */





?>