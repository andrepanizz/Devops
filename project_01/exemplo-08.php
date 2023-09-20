<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heranca de Classe</title>
</head>
<body>
    <h2><center> Herança de Classe em PHP <br> Exemplo 02</center></h2>
    <br>

    <?php
    /** @param Exemplo de herança de classe transportes
     * 
     */
    class Veiculos {
        /** @param O encapsulamento protected permite que o acesso venha de herança e acesso a classe */
        
        protected string $motor; 
        protected string $frenar;
        protected string $combustivel;
        protected int $ano;
        protected string $cor;
        protected string $modelo;

        /** @param Criando os Getters and Setters
         * Podemos fazer isto utilizando um metodo construtor:
         */
        public function __construct($engine, $break, $fuel, $year, $color, $model)
        {
            $this->motor = $engine;
            $this->frenar = $break;
            $this->combustivel = $fuel;
            $this->ano = $year;
            $this->cor = $color;
            $this->modelo = $model;
            
        }

        public static function Error(){
            $tag1 = "<h1>";
            $tag2 = "</h2>";
            throw new Exception($tag1 . "Não e Possivel Validar! <br>" . $tag2);

        }
        public function view()
        {
            return  array(
            "<b><br> Motorização: </b><br>" => $this->motor,
            "<b><br> Tipos de Freios: </b><br> " => $this->frenar,
            "<b><br> Combustivél usado: </b><br>" => $this->combustivel,
            "<b><br> Ano Fabricação: </b><br>" => $this->ano,
            "<b><br> Cor do Modelo: </b><br>" => $this->cor,
            "<b><br> Marca Fabricante/Modelo: </b><br>" => $this->modelo
            );
         
            
        }

          
    } #end class Veiculo:
    
class Barcos extends Veiculos {
/** @param Veiculos Maritimos  */


}


$a = "1.6";
$b = "Disco";
$c = "Gasolina";
$d = 2006;
$e = "Vermelho";
$f = "Ford";

$objeto = new  Veiculos($a,$b,$c,$d,$e,$f);
print_r($objeto->view());
echo "<br>";



?>
    
</body>
</html>