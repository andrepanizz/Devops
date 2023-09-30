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
 
$class = new Hello('Andre Panizza dos Santos');
echo $class;
//Escreverá "Andre Panizza dos Santos"


?>
