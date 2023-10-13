<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../css/style.css"/>
    <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen"/> 
    <title> Atributos Estaticos </title>
</head>
<body>
<center> <h3> Metodos ou Atributos Estaticos </h3> </center>
<br>
<!--Estrutura de POO -->
<?php
//Metodos e Atributos Estaticos:
# O codigo original estava dentro de uma classe;

class mensageCaution {
    public static function Aviso($mensage)
    {
        return array(" <b> Impossivel adicionar os Tipos: </b>" => "<ul>" . $mensage ."</ul>");
        
    }
}
class cFileType {
# Esta simplemente definindo o valor da variavel $Type, se e True ou False
# Se o $type for um dos valores validos: 'jpeg','png' ou 'gif' do contrario retorna "false"
function fImage($type):bool
{
    switch($type){
        case 'jpeg':
        $bool = true;
        break;
        case 'png':
        $bool = true;
        break;
        case 'gif':
        $bool = true;
        break;
        default:
        $bool = false;
        break;
    }
    return $bool;

  }

}

//Instanciando a classe:
$formats = []; // array is empty
if(isset($formats) && empty($formats)){
     array_push($formats, $a = 'jpeg',$b = 'png',$c = 'gif',$d = 'bpm');
}else{
    return strtoupper("Error <br>");
}

$arquivo = new cFileType();

if($arquivo->fImage($formats[0] == true)){
    echo ucfirst("O tipo de arquivo e: {$arquivo->fimage($formats[0])} Verdadeiro!! do tipo <b> JPEG </b><br>");

}else if($arquivo->fImage($formats[1]) == true){
    echo ucfirst("O tipo de arquivo e: {$arquivo->fimage($formats[1])} Verdadeiro!! do tipo <b> PNG </b><br>");

}else if($arquivo->fImage($formats[2]) == true) {
    echo ucfirst("O tipo de arquivo e: {$arquivo->fimage($formats[2])} Verdadeiro!! do tipo <b> GIF </b><br>");

}else if($arquivo->fImage($formats[3])== false){
    echo ucfirst("O tipo de arquivo e: {$arquivo->fimage($formats[3])} Falso! do tipo <b> BPM </b><br>");

}else{
    print_r(mensageCaution::Aviso($formats));
    
}
echo "<br>";

//vamos utilizar a função in_array();

?>

</body>
</html>