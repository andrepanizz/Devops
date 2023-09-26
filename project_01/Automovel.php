<?php
interface Veiculo {
  public function acelerar($velocidade);
  public function frear($velocidade);
  public function trocarMarcha($marcha);
}

Abstract class Automovel implements Veiculo {

  public function acelerar($velocidade)
  {
    echo ucfirst("O veiculo acelerou ate: " . $velocidade . "<b> km/h </b><br>");
  }
  public function frear($velocidade){
    
    echo ucfirst("O veiculo frenou ate: " . $velocidade . "<b> km/h </b><br>");  
  }
  public function trocarMarcha($marcha)
  {
     echo ucfirst("O veiculo engatou a marcha" . $marcha . "a uma velocidade de <b> 200 KM/h </b>");   
  }
  
}


?>
