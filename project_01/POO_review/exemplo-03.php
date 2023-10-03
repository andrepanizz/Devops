<?php
// entendendo Metodos Estaticos em POO:
Class Documento {
  protected string $msg = "Não e Possivel Validar este CPF!";
  private string $numero;

  public function getNumero():int
    {
      return $this->numero;
    }

    public function retMsg()
    {
  
  $aviso = strval($this->msg);
  return $aviso . "<br>";
    }

  public function setNumero($numero)
    {
      /* if($resultado == false):
          return throw new Exception();
      endif;
      try {
        $resultado == NULL;
      }catch (Exception $e) {
        echo 'Exceção capturada: ', $e->getMessage(), "\n";
      }*/

      //quando formos setar um novo numero de cpf:
      $resultado = Documento::validarCpf($numero);
        if($resultado == false):
                   
          return throw new Exception(self::retMsg());
            
        endif;
      
      $this->numero = $numero;
    }
// function que retorna uma função para uma msg de erro personalizada:

// Aqui vai o metodo magico de validação do cpf:
public static function validarCpf($cpf):bool{

  //verfica se um numero foi informado:
    if(empty($cpf)) return false;
  //Elimina possivel Mascara:
  $cpf = preg_replace('/[^0-9]/','',$cpf); 
  $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT); 
  //Verifica se o numero que digitamos informado e igual a 11
    if(strlen($cpf) != 11) { //se o tamanho da variavel $cpf for diferente de 11 retorna falso pra mim
      return false;
      //Verifica se nenhuma das sequencias invalidas abaixo
    //foi digitada . Caso afirmativo . retorna false;

    }else if ($cpf == '00000000000' ||
              $cpf == '11111111111'||
              $cpf == '22222222222'||
              $cpf == '33333333333'||
              $cpf == '44444444444'||
              $cpf == '55555555555'||
              $cpf == '66666666666'||
              $cpf == '77777777777'||
              $cpf == '88888888888'||
              $cpf == '99999999999') {
                return false;
      //Caucula quantos digitos verificadores para verificar  se o
      //Cpf é valido:
      }else{
         /** @param $t inicializa com 09, enquanto $t for menor que 11, Incrementa de 1 em 1 pra mim */
        for($t = 9; $t < 11; $t++) {            
            for($d = 0, $c = 0; $c < $t; $c++){
              /** @param $d inicia com 0. $c inicia com 0 enquanto $c = 0; for menor que $t = 9; incrementa o $c de 1 em 1 */
                $d + $d = $cpf[$c] * (($t + 1) - $c);
                  //var_dump($d);
              }
              //fora do segundo FOR temos:
                $d = ((10 * $d) % 11) % 10; //O valor de $d precedencia de operador 10 multiplicado por $d e o resto da divisão de 11 e 10
              // Se o cpf com $c for diferente de $d; realizarei a conta pra saber qual o valor final de $d, retorna false pra mim
              if($cpf[$c] != $d):
                return false;
              endif;
           } //fim do loop do for;

       }
  }
        
}
  
$cpf = new Documento();
$cpf->setNumero("12345678999");
var_dump($cpf->getNumero());

/*Nota sobre a function str_pad(string $string,int $length,string $pad_string = " ",int $pad_type = STR_PAD_RIGHT) 
-----------------------------------------------------------------------------------------------------------------

Esta função retorna a string preenchida à esquerda, à direita ou em ambos os lados até o comprimento de preenchimento especificado. Se o argumento opcional pad_string não for fornecido, a string será preenchida com espaços, caso contrário, será preenchida com caracteres de pad_string até o limite.
Parâmetros: (string a string de entrada, length o comprimento desejado da string preenchida final. Se o valor de length for negativo. menor ou igual à string de entrada. nenhum preenchimento ocorre e a string será retornada. Pad_string, Pad_type

valor de retorno:
Retorna a string preenchida
*/

/*Nota sobre function preg_replace()

preg_replace — Realiza uma pesquisa por uma expressão regular e a substitui
A string ou array com strings para substituir. Se este parâmetro é uma string e o parâmetro pattern é um array, todos patterns vão ser substituídos por esta string. Se ambos pattern e replacement parâmetros são arrays, cada pattern vai ser substituído pelo seureplacement correspondente. Se houver menos elementos no replacement array do que no pattern array, qualquer extra patterns será substituído por uma string vazia.

Return Value:
preg_replace() retorna um array se o parâmetro subject é um array, caso contrário retorna uma string

Se a correspondência for encontrada, o novo subject será devolvido, caso contrário subject será devolvido inalterado ou null se um erro ocorreu.

*/
?>
