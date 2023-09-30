<?php
//Exemplo de To_string  varios exemplos;
class Hello {
    private $nome;
 
    public function  __construct($nome) {
        $this->nome = $nome;
    }
 
    public function  __toString() {
        return 'Hello ' . $this->nome;
    }
}
 
$class = new Hello('Rafael Wendel Pinheiro');
echo $class;
//Escreverá "Hello Rafael Wendel Pinheiro"


?>
