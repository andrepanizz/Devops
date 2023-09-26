<?php
/** @param  Porque e importante agora o nome do arquivo ter o mesmo nome da classe? 
 resposta: Porque vamos usar isso na função autoload, iremo passar o nome da classe vamos procurar um arquivo exatamente com este nome
 */


# Note que a classe extends da classe automovel, precisamos fazer a mesma coisa para a classe automovel;
# Temos que criar tambem um arquivo com o nome da classe automovel;
class Delrey extends automovel {
    public function Empurrar(){
        echo "O veiculo Delrey foi empurrado ao engatar a marcha ré! <br>";
    }

?>
