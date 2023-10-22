<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../logo/php.png">
    <link rel="stylesheet" href="../PDO_review/css-exemplo-04.php/style-example4.css">
    <title>Getters and Setters and constructor</title>
</head>
<body>
    <br>
    <h3> Exemplo de Construtor e Pagina </h3>
    <br>
    <hr>

    <?php
    //interface: 
    interface especificar {
        public function viewAll():array;
                
    }
    //atributes:
    class Automovel implements especificar {
        public string $modelo;
        protected string $marca;
        public int $portas;
        public string $combustivel;
        public int $ano;
        
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
        public function getModelo():string
        {
            return $this->modelo;
        }
        
        public function setMarca($marca)
        {
            $this->marca = $marca;
        }

        public function getMarca():string
        {
            return $this->marca;
        }

        public function getPortas():int
        {
            return $this->portas;
        }

        public function setPortas($portas)
        {
            $this->portas = $portas;
        }

        public function setCombustivel($comb)
        {
            $this->combustivel = $comb;
        }
        
        public function getComb():string
        {
            return $this->combustivel;
        }

        public function setAno($ano)
        {
            $this->ano = $ano;
        }

        public function viewAll():array
        {
            //traz todos os dado pra mim:

            return array(
                ucwords("modelo_veiculo: ")=>$this->modelo,
                ucwords("marca_do_Veiculo: ")=>$this->marca,
                ucwords("Quantidade_Portas: ")=>$this->portas,
                ucwords("Tipo de Combustivel: ")=>$this->combustivel,
                ucwords("Ano do Veiculo: ")=>$this->ano
            );
        }

        //adicionando um metodo ToString():
       public function __toString()
       {
        // metodo que devolve uma string();
       }



    }// fim da classe

    //instanciamento do Objeto: // passando: modelo, marca, portas, combustivel, ano;
    $objeto = new Automovel("Onix Plus","Chevrolet", 4 ,"Gasolina",2006);
    /*
    //aqui podemos chamar os metodos getters and setters, alem do metodo ViewAll();

    
    */

    // trabalhando com herança:
    class trator extends Automovel {

        //atributos de um trator():
        protected $tire_dimension;
        protected $diameter_pistol;
        protected $size_escavadeira;
        
        /**
         * O tipo de emcapsulamento da propriedade Protected a propria classe e a Herança que pode 
         * acessar o atributo;
         */
        public function moverTrator():string
        {
            return strtoupper("O trator se Movel <br/>") . "do modelo da: " . $this->getModelo();
            echo "<br/>"; 

        }

        public function escavar()
        {
            return ucfirst("<i><center>O trator Tirou terra do terreno</i></center>");
            echo "<br/>";
        }

        //criar metodos gettears and setters para o trator:
        public function setDimesionTire($tire)
        {
            $this->tire_dimension = $tire;
        }

        public function getDimensionTire():float
        {
            return $this->tire_dimension;

        }

        public function setPistol($pistol)
        {
            $this->diameter_pistol = $pistol;

        }

        public function getPistol():int
        {
            return $this->diameter_pistol;
        }

        public function setSize_Hole($hole)
        {
            $this->size_escavadeira = $hole;
        }

        public function getSize_Hole():int
        {
            return $this->size_escavadeira;
        }


        public function viewTrator()
        {
            //criando um array com as caracteristicas do trator();
            return array(
                ucwords("Tipo de Pistão: ")=>$this->getDimensionTire(),
                ucwords("Tamanho do Pistão: ")=>$this->getPistol(),
                ucwords("Tamanho Escavadeira: ")=>$this->getSize_Hole()
            );
        }
        
    }

       
    // conexão com o banco de dados:
    // crição de um novo banco de dados para conexão e armazenamento das caracteristicas:



    ?>
<script src="../JavaScript-Model/model.js"></script>    
</body>
</html>