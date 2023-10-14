<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../css/style.css"/>
    <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen"/> 
    <title> noçoes de Emcapsulamento em PHP </title>
    <!-- noçoes de Emvapsulamento em PHP -->
</head>
<body>
    <h2> Emcapsulamento </h2>
    <br>
    <?php

    // exemplo de arquivo para verificar tipos de acesso com emcapsulamento!
    
    /** @param Encapsulamento aula */
    /** @param criando uma classe basica pessoa apenas para exibir os dados */

    class Pessoa {
        public $nome = "Rasmus Lardof";
        private $idade = 48;
        protected $senha = "123456";
        protected $password = "24569";

        /** Testando o Modificadores de acesso de acordo com Emcapsulamente */

        public function verDados(){
            echo $this->nome . "<br>";
            echo $this->idade . "<br>";
            echo $this->senha . "<br>";
        
        }
    }


class Pessoa1 extends Pessoa {

    public $idade = 50;

    public function verDados2(){
        echo $this->nome . "<br>";
        echo $this->senha . "<br>";
        echo $this->idade . "<br>";

    }
}
$objeto = new Pessoa();
$objeto2 = new Pessoa1();

echo $objeto2->verDados2();
echo $objeto->verDados();


//echo $objeto->senha . "<br>";

/** @param Nota:
 * 1 - Quem pode acessar um atributo ou um metodo que e Protegido (protected):
 * - Só que está dentro da propria classe, (metodos vão conseguir enxergar este atributo protegido)
 * - ou  quem Herda desta Classe. (classe filha) agora o objeto ele não consegue acessar.
 * 
 * Qual a diferença do Privado (Private) para o protegido: 
 * - E que o privado, nem mesmo os herdeiros, as classes que herdão desta classe, vai conseguir acessar
 * - Só a propria Classe.
 * 
 *  - referente ao Metodo verDados(): como demos um acesso publico ao metodo verDados(), então os dados
 * - Aparecerão lá fora.
 */


    ?>

    
</body>
</html>