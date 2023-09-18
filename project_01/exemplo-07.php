<?php
/** @param trabalhando com herança */

class Documento {
    private $numero;

    public function getNumero(){
        return $this->numero;
    }
    public function setNumero($n){
        $this->numero = $n;

    }
}

class cpf extends Documento {
    
}


?>