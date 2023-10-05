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
        echo $this->logradouro . "<br>" . $this->cidade . "<br>" . $this->estado . "<br>" . $this->complemento . "<br>" . $this->bairro . "<br>" . $this->pais . "<br>" . $this->cep . "<br>";
        echo "<hr>";
        ///////////////////////////////////

        
    }

    
    //Getters and Setters:
    public function setNumberDocument($numero)
    {   
        Valida::validarCPF($numero);

        $this->numero = $numero;

    }

    

    public function getNumberDocument(){

        return $this->numero;

    }



}

class Validacao extends Cadastro {

    public static function validarCpf($cpf)
    {

    }

    

}

// end this file;
?>
