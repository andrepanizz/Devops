<?php
// metodos magicos:
/* interface Validar {

 
}
*/
abstract class Cadastro {
   
    private string $logradouro;
    protected string $numero;
    private string $cidade;
    private string $estado;
    private string $complemento;
    private string $bairro;
    private string $pais;
    private   int  $cep;
    
    

    //estaremos criando aqui um Metodo construtor:
    public function __construct($log, $numero, $city, $compl, $state, $bair, $country, $postalcode)
    {
        $this->logradouro = $log;
        $this->cidade = $city;
        $this->estado = $state;
        $this->complemento = $compl;
        $this->bairro = $bair;
        $this->pais = $country;
        $this->cep = $postalcode;

    }

    public function __toString()
    {
        echo $this->logradouro . "<br>" . $this->cidade . "<br>" . $this->estado . "<br>" . $this->complemento . "<br>" . $this->bairro . "<br>" . $this->pais . "<br>" . $this->cep . "<br>";
        echo "<hr>";
        
        
    }

    
    //Getters and Setters:
    public function setNumberDocument($numero)
    {   
        Valida::validarCPF($numero); //chamando a function da classe Valida;

        $this->numero = $numero;

    }

    

    public function getNumberDocument(){

        return $this->numero;

    }



}

class Validacao extends Cadastro {

    public static function validarCpf($cpf)
    {
        //aqui vai a validação do cpf;
     if(empty($cpf)) {
        return false;
    }
 
    $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;

    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
     
    
    if (strlen($cpf) != 11) {
        echo "length";
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

// end this file;
?>
