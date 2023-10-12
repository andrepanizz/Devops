<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../css/style.css"/>
    <title>exemplo 07 em PHP</title>
</head>
<body>
    <br>
        
</body>
</html>


<?php

/** @param trabalhando com herança
 * exemplo pratico de utilização:
*/


class Documento {


private $numero; //atribute

public function getNumero(){ //method this recovery the value

    return $this->numero;
}

public function setNumero($n){ // method this set a number

    $this->numero = $n;
        
    }

} // end the class Documento

/** @param classe extends this below:
 *
 */

class CPF extends Documento {

    

    public function validar()
    {
        $numeroCpf = $this->getNumero();

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
                
                for($d = 0; $c = 0; $c < $t, $c++) {
                    $d+= $cpf($c) * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;
                if($cpf($c) != $d){
                    return false;
                }

            }
            return true;
           
        }



        return true;


    }
    
    
} //end the class extends the P1 betwee Documento


class CNPJ extends Documento {

    private $numberCnpj;

public function getNumero() {
    return $this->numberCnpj;
}

public function setNumero($number) {

    $this->numberCnpj = $number;
}

public function validarCnpj(){

    //criar regra de validação de CNPJ

    return true;
}


}

$doc = new CPF();
$doc->setNumero("111222333-44");
var_dump($doc->validar());
echo "<br>";
echo $doc->getNumero();


?>