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

$idade = 17;

switch($idade) {
  case 15:
	echo 'Você tem 15';
    break;
  case 16:
	echo 'Você tem 16';
    break;
  case 17:
	echo 'Você tem 17';
    break;
  case 18:
	echo 'Você tem 18';
    break;
  default:
    echo "Você tem $idade";
}

// Agora vamos aprender a usar os Laços de Loop, While, Do While e for:

// O while e simples e tranquilo, porem temos que tomar o maximo de cuidado pra não cair no infinito:

    $contador = 0;

while ($contador < 10) {
  echo $contador;
  $contador++; // imprimira 1, 2, 3, 4, 5, 6, 7, 8, 9     ele não imprimira o 10 pois não dizemos se e >= 10;
}

// note que temos um contador que inicializa em 0
// depois temos enquanto o contador for menor que 10 mostre o contador na tela;
// E por fim faça o incremento deste contador, a saida para este processo será:;

//Como usar um Laço foreach sintaxe basica:

    $lista50 = ['a', 'b', 'c'];

    foreach ($lista50 as $valor) {
      echo $valor; // vai retornar: 
    }


?>