<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Exemplo em PHP - 01 </title>
</head>
<body>
<center> <h3>Exemplo da aula 01 em PHP </h3></center>
<br>

<?php 
# init class:

class carros {
    
    #atribute
    
    private $motor; 
    private $portas;
    private $placa;
    private $placa_preta;
    private $ano;

    #methods getters and setters;
    public function getMotor():string
    {
        return $this->motor;
    }

    public function setMotor($motors){
        $this->motor = $motors;

    }
    public function getPortas():int
    {
        return $this->portas;

    }
    public function setPortas($portas){

        if(isset($portas) && $portas  == true){
        $this->portas = $portas;

        }else{
            return "Não e possivel adicionar o valor ao atributo";

        }
        
        
    }
    public function getPlaca():int
    {
        if(isset($this->placa_preta)):
            return $this->placa_preta;
        endif;
        echo "<br>";
        return $this->placa;

    }
    public function setPlaca($placa){
        $this->placa = $placa;


    }
    public function getAno():int
    {

        return $this->ano;

    }
    public function setAno($ano){

        $this->ano = $ano;
    }

    # array for view all results:

        public function exibe(){

            return array("Cilindrada_motor"=>$this->getMotor(),
            "Quantidade_Portas"=>$this->getPortas(),
            "Placa"=>$this->getPlaca(),
            "Ano_Fabricação" =>$this->getAno()
        );
                            
        }

}    

$veiculo = new carros();
$veiculo->setMotor("1.6");
$veiculo->setAno(2006);
$veiculo->setPortas("4 Portas");
$veiculo->setPlaca("AZI-9987");
print_r($veiculo->exibe());
echo "<br>";


?>
    
</body>
</html>
