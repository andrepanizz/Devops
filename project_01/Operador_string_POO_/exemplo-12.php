<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../css/style.css"/>
    <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen"/> 
    <title>Classe Abstrata</title>
    <!-- Exemplo Pratico de Classe Abstrata -->
</head>
<body>
    <h2> Classe Abstrata em PHP </h2>
    <br>
    
    <?php
    /** @param Exemplo e classe abstrata */

    interface Veiculo {

        public function acelerar($velocidade);
        public function frenar($velocidade);
        public function trocarMarcha($marcha);
    }

    /*
    - referente a classe abstrata, a classe abstrata não pode ser instanciada.
    - ela somente podera ser extendida, e poderá ser organizada com interface
    - este e um metodo de organização que deixa o codigo mais robusto, e criando uma classe generica, podemos redirecionar

     */


    abstract class Automovel implements Veiculo {

        public function acelerar($velocidade)
        {
            echo "O veiculo acelerou a uma velocidade de:  ".$velocidade." <b> KM/h </b><br>";
        }
        public function frenar($velocidade)
        {
            echo "O veiculo frenou bruscamente a: " . $velocidade . "<b> KM/h</b><br>";
        }
        public function trocarMarcha($marcha)
        {
            echo "O veiculo trocou a Marcha para a " . " " .  $marcha ."º " .  " em uma velocidade de: 100 <b> KM/h </b>";
        }
    }
    
    class Delrey extends Automovel {

        public static function empurrar($velocidade){
            return  "O veiculo DelRey, foi empurado a uma velocidade de: " . $velocidade . "KM/h";
        }
       
        
    }

   /* $carro = new Delrey();

    echo $carro->empurrar(10);
    echo "<br><br>";
    $carro->acelerar(100);
    echo "<br>";
    $carro->frenar(20);
    echo "<br>";
    $carro->trocarMarcha(5);
    echo "<br>";

       
    /*
    $carro = new Delrey();
    $carro->acelerar(200);
    echo "<br>";
    */
   
   ?>
<script src=""></script>
</body>
</html>
