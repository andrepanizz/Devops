<?php
Abstract class Automovel implements Veiculo {

  public function acelerar($velocidade)
  {
    echo ucfrist("O veiculo acelerou ate: " . $velocidade . "<b> km/h </b><br>");
  }
  public function frear($velocidade){
    
    echo ucfrist("O veiculo frenou ate: " . $velocidade . "<b> km/h </b><br>");  
  }
  public function trocarMarcha($marcha)
  {
     echo ucfrist("O veiculo engatou a marcha" . $marcha . "a uma velocidade de <b> 200 KM/h </b>");   
  }
  
}


?>
