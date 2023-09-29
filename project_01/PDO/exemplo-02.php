<?php
//Conectando PHP com MYSQL Server usando PDO;

$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0","sa","");
$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin;");
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($results); //estou jogando um json encode para transformar em json 
echo "<br><br><br>";
echo "</strong><hr></strong>";
// ou se eu quiser percorrer os dados:

/** @param percorrendo usando um foreach */

foreach($results as $row){
    foreach($row as $value){
        echo "<strong>" . $row . ": </strong>" . " " . $value . "<br>";
    }
    echo "<b>===========================================================</b> <br>";
}
/*E necessario adiocionar todos os drivers na pasta de Extensões do Xampp:
 Versões do PHP 7.0, 7.1, 7.2, 7.3, 7.4, até a 8.2
  Necessario passar o valor dos arquivos dos drivers que esta contido em PHP.ini

  extension=php_pdo_sqlsrv_7_nts_x64.dll
extension=php_pdo_sqlsrv_7_nts_x86.dll
extension=php_pdo_sqlsrv_7_ts_x64.dll
extension=php_pdo_sqlsrv_7_ts_x86.dll
extension=php_sqlsrv_7_nts_x64.dll
extension=php_sqlsrv_7_nts_x86.dll
extension=php_sqlsrv_7_ts_x64.dll
extension=php_sqlsrv_7_ts_x86.dll
extension=php_pdo_sqlsrv_71_nts.dll
extension=php_pdo_sqlsrv_71_ts.dll
extension=php_sqlsrv_71_nts.dll
extension=php_sqlsrv_71_ts.dll
extension=php_pdo_sqlsrv_72_nts.dll
extension=php_pdo_sqlsrv_72_ts.dll
extension=php_sqlsrv_72_nts.dll
extension=php_sqlsrv_72_ts.dll
extension=php_pdo_sqlsrv_73_nts.dll
extension=php_pdo_sqlsrv_73_ts.dll
extension=php_sqlsrv_73_nts.dll
extension=php_sqlsrv_73_ts.dll
extension=php_pdo_sqlsrv_80_nts_x64.dll
extension=php_pdo_sqlsrv_80_nts_x86.dll
extension=php_pdo_sqlsrv_80_ts_x64.dll
extension=php_pdo_sqlsrv_80_ts_x86.dll
extension=php_pdo_sqlsrv_81_nts_x64.dll
extension=php_pdo_sqlsrv_81_nts_x86.dll
extension=php_pdo_sqlsrv_81_ts_x64.dll
extension=php_pdo_sqlsrv_81_ts_x86.dll
extension=php_pdo_sqlsrv_82_nts_x64.dll
extension=php_pdo_sqlsrv_82_nts_x86.dll
extension=php_pdo_sqlsrv_82_ts_x64.dll
extension=php_pdo_sqlsrv_82_ts_x86.dll
extension=php_sqlsrv_80_nts_x64.dll
extension=php_sqlsrv_80_nts_x86.dll
extension=php_sqlsrv_80_ts_x64.dll
extension=php_sqlsrv_80_ts_x86.dll
extension=php_sqlsrv_81_nts_x64.dll
extension=php_sqlsrv_81_nts_x86.dll
extension=php_sqlsrv_81_ts_x64.dll
extension=php_sqlsrv_81_ts_x86.dll
extension=php_sqlsrv_82_nts_x64.dll
extension=php_sqlsrv_82_nts_x86.dll
extension=php_sqlsrv_82_ts_x64.dll
extension=php_sqlsrv_82_ts_x86.dll
  
  */

/*atualmente no meu codigo o seguinte erro de exibição esta sendo apontado:
Fatal error: Uncaught PDOException: SQLSTATE[28000]: [Microsoft][ODBC Driver 17 for SQL Server][SQL Server]Falha de logon do usuário 'sa'. in C:\xampp\htdocs\Alura-Devops\php7\PDO\exemplo-02.php:4 Stack trace: #0 C:\xampp\htdocs\Alura-Devops\php7\PDO\exemplo-02.php(4): PDO->__construct('sqlsrv:Database...', 'sa', '') 
   #1 {main} thrown in C:\xampp\htdocs\Alura-Devops\php7\PDO\exemplo-02.php on line 4 
Pesquisando este erro no StackOverflow referente a linha 4 porem faltam os drivers necessarios para se conectar ao Banco do SQL Server;    
   */
