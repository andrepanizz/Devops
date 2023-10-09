<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Exemplo de Herança </title>
    <link rel="icon" href="../logo/php.png"/>
    <link rel="stylesheet" type="text/css" href="/Alura-Devops/php7/css/style.css" media="screen"/> 
</head>
<body>
    <h2>Trabalhando com Herança</h2>
<?php
class Documento {
    private $numero;


    //create the getters and Setters

    public function getNumero()
    {

        return $this->numero;

    }

    public function setNumero($n)
    {
        $this->numero = $n;
    }

    public function validarCPF():bool
    {
        $numeroCPF = $this->getNumero();
        if($numeroCPF === false):
            throw new Exception("Este Cpf Não e Valido");
        endif;

        
        // validação do cpf:
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

        
        return true;
        
    }
  
}

class CPF extends Documento {
    // herança da classe Documento()

      

}

class CNPJ extends Documento {
// herança da classe Documento();


}
$doc = new CPF();
$doc->setNumero("111222333-44") . "<br>";

    


