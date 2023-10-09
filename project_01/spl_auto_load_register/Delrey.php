<?php
// e importante o arquivo ter o mesmo nome da classe:
// Note que no arquivo de classe para eu extender de Automovel eu precisei do require_once:

require_once("./Automovel.php");

class Delrey extends Automovel {
    public function Empurrar(){
        echo ucfirst("O veiculo Delrey foi empurrado ao engatar a marcha ré! <br>");
    }

}



?>