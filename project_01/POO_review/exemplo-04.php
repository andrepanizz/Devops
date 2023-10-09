<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../logo/php.png">
    <link rel="stylesheet" type="text/css" href="/Alura-Devops/php7/css/style.css" media="screen"/> 
    <title>Metodos Magicos</title>
</head>
<body>
 <?php
/*
1 – __construct É o nosso tão famoso construtor. Ele é chamado quando instanciamos uma classe, ou seja, quando escrevemos new. ...
class Cliente{

   private $nome;

   public function __construct($nome){
      $this->nome = $nome;
   }

}

$cliente = new Cliente("Meu cliente");
2 – __destruct O método contrário do construtor, ou seja, é chamado quando uma instância for destruída. ...
3 – __toString Por padrão se fizermos assim:

class Cliente{

   private $nome;

   public function __construct($nome){
      $this->nome = $nome;
   }
   
   public function __toString(){
      return $this->nome;
   }
}

$cliente = new Cliente("Meu cliente");

echo $cliente; //imprimirá Meu cliente

4 – __call e __callStatic:
class String{

   public function __call($name, $arguments){
      if (strpos($name,'upper') !== false) {
        return strtoupper($arguments[0]);
      }
   }

   public static function __callStatic($name, $arguments){
      if (strpos($name,'upper') !== false) {
        return strtoupper($arguments[0]);
      }      
   }
}

$string = new String();

echo $string->upper("minha string"); //MINHA STRING
echo String::upper("minha string"); //MINHA STRING

5 – __invoke:
class String{

   public function __invoke($s){
        return strtoupper($s);
   }

}

$string = new String();

echo $string("minha string"); //MINHA STRING

6 – __get e __set:

class Cliente{

   private $nome;

   public function __set($name, $value){
      if (strpos($name,'nome') !== false) {
        $this->nome = $value;
      }
   }

   public function __get($name){
      if (strpos($name,'nome') !== false) {
        return $this->nome;
      }
   }

}

$cliente = new Cliente();
$cliente->nome="Meu cliente";
echo $cliente->nome;

8 – __clone:

class Cliente{

   private $nome;

   public function __set($name, $value){
      if (strpos($name,'nome') !== false) {
        $this->nome = $value;
      }
   }

   public function __get($name){
      if (strpos($name,'nome') !== false) {
        return $this->nome;
      }
   }

   public function __clone(){
   	$this->nome .=" Sobrenome";
   }

}

$cliente = new Cliente();
$cliente->nome="Meu cliente";
echo $cliente->nome;

$clienteNovo = clone $cliente;
echo "Novo cliente: ".$clienteNovo->nome; //Meu cliente Sobrenome

*/
 interface Valida {
    public function inserirCnpj($number);
    public function obterCnpj();
    public function olhar();
 }

 abstract class Endereco {

    protected $logradouro;
    protected $numero;
    protected $cidade;
    protected $bairro;
    protected $estado;
    protected $pais;

    //getters and Setters

    public function __construct($a, $b, $c, $d, $e)
    {
        $this->logradouro = $a;
        $this->cidade = $b;
        $this->bairro = $c;
        $this->estado = $d;
        $this->pais =   $e;
        
    }

    public function setNumero($numero){
        $resultado = Self::validarCPF($numero);
        if($resultado === false){
            throw new Exception("Este CPF não e Valido!");
        }

        $this->numero = $numero;
        
    }

    public function __toString()
    {
        return $this->logradouro.",".$this->cidade.",".$this->bairro.",".$this->estado.",".$this->pais;

               
    }

    public function getNumero(){
        return $this->numero;
    }


    public static function validarCPF($cpf){
        if(empty($cpf)) {
            return false;
        }
     
        $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;
    
        $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
         
        
        if (strlen($cpf) != 11) {
            echo 'length';
            return false;
        }
        
        else if ($cpf == '00000000000' || 
            $cpf == '11111111111' || 
            $cpf == '22222222222' || 
            $cpf == '33333333333' || 
            $cpf == '44444444444' || 
            $cpf == '55555555555' || 
            $cpf == '66666666666' || 
            $cpf == '77777777777' || 
            $cpf == '88888888888' || 
            $cpf == '99999999999') {
            return false;
    
         } else {   
             
            for ($t = 9; $t < 11; $t++) {
                 
                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $cpf[$c] * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;
                if ($cpf[$c] != $d) {
                    return false;
                }
            }
     
            return true;
        }

    }

    public function view(){
        return array(
            "logradouro:"=>$this->logradouro,
            "Cidade:" =>$this->cidade,
            "Estado:"=>$this->estado,
            "Bairro"=>$this->bairro,
            "Pais:"=>$this->pais
        );
    }

    public function __destruct()
    {
        var_dump("DESTRUIR");
    }


 }

class Endereco2  extends Endereco {
    // fazendo herança da classe Endereco;



} 


$objeto = new Endereco2("Rua Waldedmar Saraiva Leão","123", "Santos", "São Paulo", "Brasil");
$objeto->setNumero("35784894846");
echo "<br>";
echo $objeto->getNumero();
echo "<br>";
echo ($objeto);
echo "<hr>";
print_r($objeto);

?>
<script src="" ></script>
</body>
</html>
