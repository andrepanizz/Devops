<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../logo/php.png"/>
    <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen"/> 
    <title> Review em Poo </title>

</head>
<body>
    
</body>
</html>


<?php
/**
 * Fazendo o Review de POO:
 * Estas parte e importante para se familiarizar com o Data_Acess_Object;
 *  - exemplo - classe cliente, cadastro
 *  - utilizaremos o extends, emcapsulamento: public, protected, private;
 *  - Na parte de Dao, foi criado uma tabela chamada tb_usuarios, poderiamos criar outras (clientes), campos: End. Documento. Cpf.
 *  - Vamos adicionar mais parametros: verificaremos como e o INSERT, UPDATE, E O DELETE.
 *  - vamos fazer isto nesta session
 */
class Cliente {

    //adicionando os atributos:
    public string $nome;
    public string $endereco;
    public string $numero_casa;
    public string $doc;
    public string $idade;
    public string $nasc;

    //criando getters and Setters:
    public function setNome($name)
    {
        if(isset($name) && $name != NULL):
        $this->nome = $name;
        endif;

    }
    //return this information() 
    public function getNome():string 
    {
        return $this->nome;

    }
    public function setEndereco($end)
    {
        if(isset($end) && $end != NULL):
        $this->endereco = $end;
        endif;
    }
    public function getEndereco():string
    {
        return $this->endereco;
    }
    public function setCasa($numberHouse)
    {
        if(isset($numberHouse) && $numberHouse != NULL):
            $this->numero_casa = $numberHouse;
        endif;
    }
    public function getCasa():string
    {
        return $this->numero_casa;
    }

    public  function setDocument($docu)
    {
        if(isset($docu) && $docu != NULL):
        $this->doc = $docu;
        endif;
    }
    public  function getDocument():string
    {
        return $this->doc;
    }
    public function setIdade($idade)
    {
        if(isset($idade) && $idade != NULL):
        $this->idade = $idade;
        endif;
    }
    public function getIdade():string
    {
        return $this->idade;

    }
    public function setNasc($nasc)
    {
        if(isset($nasc) && $nasc != NULL):
        $this->nasc = $nasc;
        endif;
    }
    public function getNasc():string
    {
        return $this->nasc;
    }

    //Metodo de visualização();
    public function viewInfo():array
    {
        echo "<strong> Cadastro completo</strong> <br>";
        echo "<hr>";

        return array("nome: "=>$this->getNome(),
                     "Endereço:"=>$this->getEndereco(),
                     "N°: "=>$this->getCasa(),
                     "CPF: "=>$this->getDocument(),
                     "Idade: "=>$this->getIdade(),
                     "Nascimento: "=>$this->getNasc()
        );
    }

} # Fim da classe();

//instanciamento de classe;

$objeto = new Cliente();
$objeto->setNome("<b><center> Andre Panizza dos Santos </center></b>") . "<br>";
$objeto->setEndereco("<b><center> Rua Enersto Fogo </center></b>") . "<br>";
$objeto->setCasa(133) . "<br>";
$objeto->setDocument("<b><center> 12345678900</b></center>");
$objeto->setIdade("<b><center> 30 </center></b>");
$objeto->setNasc("<b><center> 01".DIRECTORY_SEPARATOR."03".DIRECTORY_SEPARATOR."1984</b></center>");

// retornando os valores todos com o metodo exibe:
print_r($objeto->viewInfo()) . "<br>";
echo "<br>";


class mostrar extends Cliente {
    public function Details()
    {
        /** @param exemplo de to_string PHP 8.2:
         * 
         */
        /*// Declara uma classe simples
class TestClass
{
    public $foo;

    public function __construct($foo)
    {
        $this->foo = $foo;
    }

    public function __toString()
    {
        return $this->foo;
    }
}

$class = new TestClass('Hello');
echo $class;*/

    }
}

?>
