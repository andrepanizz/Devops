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
  
$cpf = new Documento();
$cpf->setNumero("2165486548518");

?>
