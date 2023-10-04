<?php
// metodos magicos:
/* interface Validar {

 
}
*/
class Cadastro {
   
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
        
    }

    
    //Getters and Setters:
    public function setNumberDocument($numero)
    {
        return $this->numero;

    }

    

    public function getNumberDocument(){

    }



}

class Validacao extends Cadastro {

    public static function validarCpf($cpf)
    {

    }

}

?>
