<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getters and Setters and constructor</title>
</head>
<body>

    <?php
    //atributes:
    class Documento {
        public string $modelo;
        public string $marca;
        public string $portas;
        public string $combustivel;
        public string $ano;
        
        //Metodo construtor __Construct();
        public function __construct($model, $marc, $port, $fuel, $Year)
        {
            // adicionando:
            $this->modelo = $model;
            $this->marca = $marc;
            $this->portas = $port;
            $this->combustivel = $fuel;
            $this->ano = $Year;
        }

        // Criação de Getters and Setters:
        public function getModelo(){
            return $this->modelo;
        }
        
        public function setMarca($marca)
        {
            $this->marca = $marca;
        }

        public function getMarca()
        {
            return $this->marca;
        }

        public function getPortas()
        {
            return $this->portas;
        }

        public function setPortas($portas)
        {
            $this->portas = $portas;
        }
        

    }// fim da classe

    //instanciamento do Objeto

    // Chamada dos Metodos criados:





    ?>
    
</body>
</html>