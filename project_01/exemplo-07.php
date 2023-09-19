<?php

/** @param trabalhando com herança
 * exemplo pratico de utilização:
*/

class Documento {

private $numero;

public function getNumero(){

    return $this->numero;
}

public function setNumero($n){

    $this->numero = $n;
        
    }

}

/** @param classe extendida below:
 *
 */

class p1 extends Documento {
    
    
}


?>