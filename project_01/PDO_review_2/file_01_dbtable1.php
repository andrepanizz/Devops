<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../logo/php.png"/>
    <title> File 01 - attached from dbtable1 </title>
</head>
<body>
<?php
/* you have two forms of connection with database:
    step 1:
    using the function native php for make connection in Database:
        function name: mysqli(); 
    step 2:
    or together others functions must populary as PDO (or PHP Data Object)
        function name: PDO();
    
    The functions required parameters:
    $host = mysql:host=localhost;
    $dbname = dbname=dbphp7;
    $user = "root";
    $password = ""
    $port = "optional" . 3306;
    
    */
//Connection:
$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","");
//

?>
<script src=""></script>
</body>
</html>
