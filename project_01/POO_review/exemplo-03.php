<?php
interface Valida {
  public function getNumero();
  public function setNumero($numero);
  public static function validarCPF($cpf);
  public static function getError();

}
class Documento {

    private $numero;

    public static function getError(){

      $msg = "Não foi possivel verificar o CPF informado";
      if($msg == gettype("string")):
        strval($msg); //converta em string;
      return $msg;   //retorna
      endif;

    }

    public function getNumero(){

        return $this->numero;

    }

    public function setNumero($numero){

        $resultado = Documento::validarCPF($numero);

        if ($resultado === false) {
            // metodo com try catch{}
            throw new Exception(Documento::getError(), 1);

        }

        $this->numero = $numero;

    }

    public static function validarCPF($cpf):bool{

        if(empty($cpf)) {
            return false;
        }
     
        $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;
    
        $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
         
        
        if(strlen($cpf) != 11) {
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

}


$cpf = new Documento();
$cpf->setNumero(ucwords("87867147241"));
echo "O numero do CPF e: ".$cpf->getNumero()."<br>";
echo "<hr>";
//Segunda

switch($cpf === true){
  case true: "O Cpf e verdadeiro" . var_dump(Documento::validarCPF("87867147241"));
  break;
  case false: "O Cpf e Falso" . var_dump(Documento::getError());
  break;
}

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
