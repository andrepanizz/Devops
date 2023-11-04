<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../css/style.css"/>
    <title> Exemplo de Trasactions </title>
</head>
<body>
<!-- inicio do arquivo de exemplo -->
<?php
/** @param function Esta função OpenConnection e a parte superior de todas as funções a seguir*/
/*
function OpenConnection()
    {
        $serverName = "tcp:myserver.database.windows.net,1433";
        $connectionOptions = array("Database"=>"AdventureWorks",
            "Uid"=>"MyUser", "PWD"=>"MyPassword");
        $conn = sqlsrv_connect($serverName, $connectionOptions);
        if($conn == false)
            die(FormatErrors(sqlsrv_errors()));

        return $conn;
    }
    /////////////////////////////////////////////
    //Executando uma consulta:
    /** @param A função sqlsrv_query() pode ser usada para recuperar um conjunto de resultados de uma consulta
     * no banco de dados SQL. Essencialmente, essa função aceita qualquer consulta e o objeto de conexão e retorna 
     * um conjunto de resultados que pode ser iterado com o uso do sqlsrv_fetch_array 
     
    function ReadData()
    {
        try
        {
            $conn = OpenConnection();
            $tsql = "SELECT [CompanyName] FROM SalesLT.Customer";
            $getProducts = sqlsrv_query($conn, $tsql);
            if ($getProducts == FALSE)
                die(FormatErrors(sqlsrv_errors()));
            $productCount = 0;
            while($row = sqlsrv_fetch_array($getProducts, SQLSRV_FETCH_ASSOC))
            {
                echo($row['CompanyName']);
                echo("<br/>");
                $productCount++;
            }
            sqlsrv_free_stmt($getProducts);
            sqlsrv_close($conn);
        }
        catch(Exception $e)
        {
            echo("Error!");
        }
    }

    // Inserindo uma Linha
    /** @param Neste Exemplo, você verá como executar uma instrução INSERT com segurança e transmitir
     * parametros. Os valores de um parametro protegem seu aplicativo de injeção SQL
     * 
     

     function InsertData()
    {
        try
        {
            $conn = OpenConnection();

            $tsql = "INSERT SalesLT.Product (Name, ProductNumber, StandardCost, ListPrice, SellStartDate) OUTPUT"
                    . " INSERTED.ProductID VALUES ('SQL Server 1', 'SQL Server 2', 0, 0, getdate())";
            //Insert query
            $insertReview = sqlsrv_query($conn, $tsql);
            if($insertReview == FALSE)
                die(FormatErrors( sqlsrv_errors()));
            echo "Product Key inserted is :";
            while($row = sqlsrv_fetch_array($insertReview, SQLSRV_FETCH_ASSOC))
            {
                echo($row['ProductID']);
            }
            sqlsrv_free_stmt($insertReview);
            sqlsrv_close($conn);
        }
        catch(Exception $e)
        {
            echo("Error!");
        }
    }

    //Reverter uma transação:
    /** @param Este exemplo de codigo mostra ou demostra o uso de transações nas qual você:
     * 1 - Inicia uma transação
     * 2 - Inserir uma linha de dados, outra linha de dados de atualização
     * 3 - Confirmar a transação se a inserção e a atualização for bem sucedida e reverter a transação 
     * se uma delas tiver falhado
     
    function Transactions()
    {
        try
        {
            $conn = OpenConnection();

            if (sqlsrv_begin_transaction($conn) == FALSE)
                die(FormatErrors(sqlsrv_errors()));

            $tsql1 = "INSERT INTO SalesLT.SalesOrderDetail (SalesOrderID,OrderQty,ProductID,UnitPrice)
            VALUES (71774, 22, 709, 33)";
            $stmt1 = sqlsrv_query($conn, $tsql1);

            Set up and execute the second query. 
            $tsql2 = "UPDATE SalesLT.SalesOrderDetail SET OrderQty = (OrderQty + 1) WHERE ProductID = 709";
            $stmt2 = sqlsrv_query( $conn, $tsql2);

             If both queries were successful, commit the transaction. 
            Otherwise, rollback the transaction.
            if($stmt1 && $stmt2)
            {
                   sqlsrv_commit($conn);
                   echo("Transaction was commited");
            }
            else
            {
                sqlsrv_rollback($conn);
                echo "Transaction was rolled back.\n";
            }
            // Free statement and connection resources. 
            sqlsrv_free_stmt( $stmt1);
            sqlsrv_free_stmt( $stmt2);
        }
        catch(Exception $e)
        {
            echo("Error!!!");
        }
    }
*/


?>
<!-- Fim do Arquivo de ! -->
<script src="../JavaScript-Model/model.js"></script>
</body>
</html>



