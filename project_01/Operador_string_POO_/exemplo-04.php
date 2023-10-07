<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Exemplo-04 - Metodos Estaticos 02 </title>
</head>
<body>
    <h2><center> Metodos Estaticos Exemplo - 02</center></h2>
<br>
<?php
/** @param metodos staticos*
 * 
 */
class Documento {
    private $numero;

    public function getNumero(){
        return $this->numero;
    }
    public function setNumero($numero){

        $this->numero = $numero;
        /** @param o numero do cpf esta na variavel $numero */

        $resultado = Documento::validarCpf($numero); //metodo estatico chamado pela classe, passando a variavel $numero;

        if($resultado == false){
            throw new Exception("<b> Cpf informado não e valido! </b><br>");

        }
    }

    /** @param Metodo de validação do CPF */
    public static function validarCpf($cpf):bool{

        /** @param Verifica se o numero foi informado */

if(empty($cpf)) return false;

/** @param Elimina possivel mascara */

$cpf = preg_replace('[^0-9]','',$cpf);
$cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);

/** @param Verifica se o numero de digitos informados e igual  a 11 */

if(strlen($cpf) != 11){
    return false;

}
/** @param Verifica se nenhyma das sequencias e invalida abaixo
 *  foi digitada. Caso afirmativo, retorna false
 */
else if($cpf == '00000000000' ||
    $cpf == '11111111111' ||
    $cpf == '22222222222' ||
    $cpf == '33333333333' ||
    $cpf == '44444444444' ||
    $cpf == '55555555555' ||
    $cpf == '66666666666' ||
    $cpf == '77777777777' ||
    $cpf == '88888888888' ||
    $cpf == '99999999999' ||
    $cpf == 'xxxxxxxxxxx') {
    return false;
    /** @param caucula os digitos verificadores para verificar
     *  se o CPF e Valído */
    
    }else{

        /** @param Laço for simples: */

            for ($t = 9; $t < 11; $t++) {
                
                for($d = 0; $c = 0; $c < $t, $c++){
                    $d+= $cpf[$c] * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;
                if($cpf[$c] != $d){
                    return false;
                }

            }
            return true;
           
        }

        
    }

}#end class
/*
$cpf = new Documento();
$cpf->setNumero("123456789");
var_dump($cpf->getNumero());
*/

var_dump(Documento::validarCpf("35784894846"));

?>
</body>
</html>