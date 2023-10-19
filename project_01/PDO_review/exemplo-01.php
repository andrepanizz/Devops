<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Mysqli_connected</title>
</head>
<body>
    <?php
    /*
    
Para se conectar ao banco de dados MySQL, precisamos saber 4 coisas.
São elas:
Host (servidor) - Lugar onde o banco de dados está.
Usuário - Usuário para entrar no MySQL.
Senha - Senha do MySQL.
Database - A base de dados que criamos.
  
    
    */
    //esta function MySQL não fara nada além de instanciar o objeto em nossa pagina;
     class MySQL {
        //atributo:

        var $host = "localhost";
        var $user = "root";
        var $password = "";
        var $database = "dbphp7";
        var $query;
        var $link;
        var $result;

      
        /*
        public function __destruct()
        {
            echo "destruiu o construtor";
        }

        */

        function MySQL()
        {
            //Apenas instancia o Objeto;
        }

        // faremos agora a function para conexão com o banco de dados:
        function connect()
        {
            
            $this->link=mysqli_connect($this->host,$this->user,$this->password);
            if(!$this->link){
                echo strtoupper("Falha na Conexão com o banco de dados! <br>"). mysqli_connect_errno();
                echo" ERRO!";
                die();
               
             } elseif(!mysqli_select_db($this->database, $this->link)) {
                echo "O banco de dados solicitado não pode ser aberto!<br>";
                echo "Error" . mysqli_error();
                die();

             }
        }

        // esta function executa uma Query:
        function executeQuery($query)
        {
            $this->connect();
            $this->query=$query;
            if($this->result=mysqli_query($this->query))
            {
                $this->disconnect();
                return $this->result;

            }else{
                echo "Ocorreu um erro na execução SQL";
                echo "Erro" . mysql_error();
                echo "SQL" . $query;
                die();
                disconnect();

            }   

        }

        // esta function desconecta do Banco de Dados;
            function desconnect()
            {
                return mysqli_close($this->link);
            }
                 

     }


?>

</body>
</html>
