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
    class Automovel {
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

        public function setCombustivel($comb)
        {
            $this->combustivel = $comb;
        }
        
        public function getComb()
        {
            return $this->combustivel;
        }

        public function setAno($ano)
        {
            $this->ano = $ano;
        }

        public function viewAll()
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



    }// fim da classe

    //instanciamento do Objeto
    $objeto = new Automovel();

    // Chamada dos Metodos criados:


    // conexão com o banco de dados:

    // variaveis de conexão:
    $host = "";
    $user = "";
    $password = "";
    $db = "";
    $port = "";
    


    $conn = new PDO();
    $stmt = $conn->prepare("");

    if($conn->connect_error):
        echo strtoupper("Não foi Possivel conectar ao  Banco de Dados <br/>") . $conn->connect_errno;
        exit or die();
    endif;
    echo "<br/>";
    echo strtoupper("<i><center> Conectado com Sucesso ao Banco de Dados!</center></i>");
    echo "<br/>";
    echo "<hr>";

    $stmt->bindParam();
    




    ?>
    
</body>
</html>