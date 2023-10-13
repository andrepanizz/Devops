<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../css/style.css"/>
    <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen"/> 
    <title>Polimorfismo</title>
</head>
<!-- Exemplo Pratico de Polimorfismo em PHP exemplo-13.php -->
<body>
    <h2>Exemplo de Polimorfismo</h2>
    <br>
    <?php
    /** @param exemplo pratico de polimorfismo */
    /**
     * @param O que é o Polimorfismo:
     * Imagine um metodo que eu tenho na classe PAI:
     * 
     * class Pai{
     *    public function Empurrar($objeto){
     * 
     *        echo $objeto . "sera empurado a uma distancia segura";
     *  
     *      }
     *   
     *   }
     * class Filha extends Pai {
     *    public function Empurrar($carro){
     *        echo "O automovel" . $carro . "Será rebocado para o Patio do Detran-SP <br>";
     *     }      
     * 
     *   }
     * }
     * Eu tenho um metodo com o mesmo nome na classe FILHA, que faz uma coisa diferente,
     * então isto e Polimorfismo, onde metodos com o mesmo nome, em classes diferentes, herdadas tem o 
     * comportamento diferente.
     * exemplo pratico:
     */

     abstract class Animal {
        public function falar()
        {
            return "Som";

        }

        public function mover()
        {
            return "Anda";
        }
     }

     class Cachorro extends Animal {
        public function falar(){
            return "Late";
        }
     }
     class gato extends Animal {
        public function falar()
        {
            return "Mia";
        }
     }
     class Passaro extends Animal {
        public function falar()
        {
            return "Canta";
        }
        public function mover()
        {
            return "Voa e " . parent::mover();
        }
     }

     $pluto = new Cachorro();
     echo $pluto->falar() . "<br>";
     echo $pluto->mover() . "<br>";

     echo "-----------------------------<br>";

     $garfield = new Gato();
     echo $garfield->falar() . "<br>";
     echo $garfield->mover() . "<br>";
     
     echo "----------------------------- <br>";

     $ave = new Passaro();
     echo $ave->falar() . "<br>";
     echo $ave->mover() . "<br>";

     /** @param Note que na classe Pai temos o metodo Mover, como fazemos pra chamar o que esta
      * na classe PAi: parent::mover 
      */

    ?>
    
</body>
</html>

