<?php

/** @param trabalhando com herança
 * exemplo pratico de utilização:
*/


class Documento {


private $numero; //atrubute

public function getNumero(){ //method this recovery the value

    return $this->numero;
}

public function setNumero($n){ // method this set a number

    $this->numero = $n;
        
    }

} // end the class Documento

/** @param classe extends this below:
 *
 */

class p1 extends Documento {
    
    
} //end the class extends the P1 betwee Documento




?>