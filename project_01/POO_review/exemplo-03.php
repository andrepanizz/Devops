<?php
// entendendo Metodos Estaticos em POO:
Class Documento {
  private string $numero;

  public function getNumero()
    {
      return $this->numero;
    }
  public function setNumero($numero)
    {
      $this->numero = $numero;
    }

public static function calcVerify($number){
      for($t = 9; $t < 11; $t++){
        
      }
}

//Aqui vai o Method Static de Validação do cpf:
public static function validarCpf($cpf){
  //verifica se o numero o foi informado:
    if(empty($cpf)) return false;
  //elimina possivel mascara:
  $cpf = preg_replace('[^0-9]', '', $cpf);
  $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
  // verifica se o numero de digitos informados e igual a 11.
    if(strlen($cpf) != 11){
      return false;
      /* Verifica se nenhuma das sequencias invalidas abaixo
         foi digitada. caso afirmativo, retorna falso!*/
    }else if($cpf == '00000000000' ||
         $cpf == '11111111111'||
         $cpf == '22222222222'||
         $cpf == '33333333333'||
         $cpf == '44444444444'||
         $cpf == '55555555555'||
         $cpf == '66666666666'||
         $cpf == '77777777777'||
         $cpf == '88888888888'||
         $cpf == '99999999999'||
         $cpf == 'xxxxxxxxxxx'){
         return false;

    }else{
      //Calcula os digitos verificadores para verificar se o 
      //Cpf e valido:


    }
   /** @param Nota sobre a função strlen():
    * Essa function retorna o valor de uma string
    * a string a ter seu valor contado strlen($string)
    * O valor da string e 0 caso ela seja vazia();
    *
    */
  


}

}
  
$cpf = new Documento();
$cpf->setNumero("2165486548518");
var_dump($cpf->getNumero());
//ira me mostrar: string() "13476784894

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
