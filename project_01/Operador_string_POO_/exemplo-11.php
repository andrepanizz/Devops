
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../css/style.css"/>
  <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen"/> 
  <title> Exemplo-11 </title>
  <br>
</head>
<body>
<?php
/** @param Modificadores de acesso, mais um exemplo pratico
 * source do exemplo: DevMedia:
 */
class Exemplo {
    public $publico = 'Public';
    private $privado = 'Privado';
    protected $protegido = 'Protegido';
    public function metodoPublico()
    {
    }
    private function metodoPrivado()
    {
    }
    protected function metodoProtegido()
    {
    }


}

/** podemos instanciar a classe, e acessar normalmente com o public
 *  Ja com o nivel de acesso private, com ele definimos que somente, 
 *  a propria classe em que um atributo ou metodo foi declarado, pode acessa-lo. 
 *  Já com o nivel de acesso protected, somente a propria classe que herdam dela
 *  podem acessar o atributo ou metodo e não pode acessar diretamente
 */ 

$obj = new Exemplo();
$obj->publico;
$obj->metodoPublico();

/*
            PRIVATE
Um erro será gerado se tentarmos acessar estes 02 elementos
$obj = new Exemplo();
$obj->privado = 'Teste'; //Erro
$obj->metodoPrivado();   //Erro
/*

/*
            PROTECTED
Um erro será gerado se tentarmos acessar estes 02 elementos também
$obj = new Exemplo();
$obj->protegido = 'Teste'; //Erro
$obj->metodoProtegido(); //Erro

*/
//-----------------------------------------------------------------------------------------------//
/*   
        ALGUMAS REGRAS QUE PRECISAMOS SEGUIR
-> Para obter o valor de um atributo protegido da classe PAI basta usar o $this->atributo;
-> Para alterar o valor de um atributo protegido (Protected) na classe pai e preciso redeclara-lo na classe filha
-> Para chamar um metodo Protegido da classe Pai e necessário usar o Parent::metodo();

Exemplificação classe filha que herda de PAI e acessa os elementos protegidos:

*/
class Pai {
    protected $protegido = 'Protegido';
    protected function metodoProtegido(){
        echo strtoupper("Metodo protegido na classe Pai");

    }
  }
  class Filha extends Pai {
    public function acessarAtributosPai(){
        echo $this->protegido;
    }
    public function chamarMetodoProtegido(){
          Parent::metodoProtegido();

    }
    
  }
?>
 
</body>
</html>
