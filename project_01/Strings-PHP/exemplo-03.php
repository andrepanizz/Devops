<!DOCTYPE html>
<html lang = "pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  


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
    $lista51 = ['d', 'e', 'f', 'g', 'h'];
    $lista52 = array("um" => 'um',"dois" =>  'DOIS',"tres" =>  'TRES',"quatro" =>  'QUATRO',"cinco" =>  'CINCO');
    foreach ($lista50 as $valor) {
      echo $valor . "<br/>"; // vai retornar: 
    }
// o foreach e feito para percorrer arrays;
    foreach ($lista51 as $value):
        echo $value . "<br/>";
    endforeach;
// Como agem as funções no PHP as functions:

// vamos definir assim:
function enviarEmail($to){
  // codigo para enviar email;

  echo "enviar email para {$to}";
  
}

// chamamos a function desta forma: enviarEmail();
/* E possive passar varios argumentos e parametros para as functions

-> desta forma:
  enviarEmail('teste@teste.com', 'subjects', 'body of the email');
-> E podemos obter estes paramentros na ordem em que eles foram definidos:

  function enviarEmail($to, $subject, $body){
    //....
  }

-> Podemos opcionalmente, definir os tipos de paramentros assim:
*/

function eviarEmail2(string $to, string $subject, string $body){
  
}
/* Alem de os parametros poderem ter um valor padrão. neste caso, mesmo se forem
omitidos quando chamados, eles ainda terão um valor;

function eviarEmail($to, $subject = 'teste', $body = 'teste'){
//.. this code any here;
}
enviarEmail('test@test.com.br); //passagem de parametros;
*/

// Podemos usar uma function que retorna algo neste exemplo:

function enviarEmail3($to){
  return true;
}

$sucess = enviarEmail3('test@test.com');
// verificarei se a variavel existe, e depois junto com sua validação: se for true;
if(isset($sucess) && $sucess = true):
    echo strtoupper("Email enviado com sucesso");
else:
    echo ucwords("erro ao enviar email");
endif;

//Exemplos praticos de function anonimas:

$minha_function = function(){
  // faz alguma coisa aqui...
};

$minha_function();

/* Observe que você precisa pôr um ponto e vírgula após a definição da função,
 e elas funcionam como funções nomeadas na questão de valores de retorno e parâmetros.
Curiosamente, elas oferecem uma maneira de acessar uma variável definida fora da função 
por meio do use():

*/
$teste = 'teste';

$minhafuncao = function() use ($teste) {
  echo $teste;
  return 'ok';
};

$minhafuncao();

// outra function bem conhecida no PHP e a arrow function (ou função de seta em portugues);
// Uma arrow function e uma function anonima que e apenas uma expressão.
// (uma linha ) e retorna implicitamente o valor dessa expressão:

// Você a define assim:

// fn(argumentos) => expressão;
$imprimirTeste = fn() => 'teste';
//chamada da arrow function:
$imprimirTeste();
echo "<br>";
echo "<hr>";

// podemos passar parametros normalmente para a arrow function:

$multiplicar = fn($a, $b) => $a * $b;

$multiplicar(2, 4); // 8;
echo "<br>";
echo "<hr>";

/* Observe que as Arrow functions tem acesso automatico as variaveis de escopo 
delimitador externo, sem a necessidade de use; */

$a1 = 2;
$b1 = 4;

$multiplicador = fn() => $a1 * $b1;

$multiplicador(); //chamo a arrow function();

echo "<br>";
echo "<hr>";

/*AS Arrow Functions são superuteis quando precisa passar a function de Callback.
  Veremos como usa-las para realizar algumas operações de arrays.
  
  Portanto, temos ao todo 3 tipos de functions: funções nomeadas , funções anonimas, e arrow functions
  
  */
// Como fazemos um laço através de arrays com map(), reduce() e filter():
// Vamos falar um Pouco de POO:

class Cachorro {
  public string $nome;
  public string $idade;
  public string $cor;
  
//Utilizando Metodos:
public function Chamar(){
  echo "chamar nome: " . $this->nome;
}

public function latir(){
  echo $this->nome . 'latiu!';
}

/* Instanciamento do Objeto: */
}

$roger = new Cachorro();

$roger->nome = "Roger";
$roger->idade = 10;
$roger->cor = 'cinza';
$roger->chamar() . "<br/>"; // retorna: chamar nome: Roger ;
$roger->latir() . "<br/>";  // retorna: Roger latiu!;

echo "<br/>";
echo "<hr>";
var_dump($roger);

/*
object(Cachorro)#1 (3) {
  ["nome"]=> string(5) "Roger"
	["idade"]=> int(10)
	["cor"]=> string(4) "cinza"
*/

// Como utilizar um metodo construtor estrutura:
// o Construct e um metodo Magico: são 09 no total:

class Gato {
  
  public string $nome;
  public string $idade;
  public string $pelagem;

  // iremos passar o metodo construtor:
  public function __construct(string $name, string $year, string $pelo)
  {
    // aqui vou adicionar aos parametros;
    if(is_string($this->nome, $this->idade, $this->pelagem) == true):
    // apos a validação iremos adicionar o valor aos parametros no metodo construtor:  
    $this->nome = $name;
    $this->idade = $year;
    $this->pelagem = $pelo;

    else:
      echo strtoupper("Não e possivel adicionar os valores!");
      exit();
    endif;

        
  }
  //getters and setters:
  public function getNome()
  {
    return $this->nome . "<br/>";
    
  }

  public function getIdade()
  {
    return $this->idade . "<br/>";
  }

  public function getPelagem()
  {
    return $this->pelagem . "<br/>";
  }

}
// fim da classe;
// termino do arquivo;

?>
<!-- Fim do Arquivo -->
<script src=""></script>
</body>
</html>