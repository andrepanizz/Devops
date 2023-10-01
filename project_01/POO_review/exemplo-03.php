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

}
  
$objeto = new Documento();

?>
