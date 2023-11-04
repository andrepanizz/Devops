<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../css/style.css"/>
    <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen"/> 
    <title> Simplificando o Codigo.. </title>
</head>
<body>
    <center><h2> Simplificando um Switch Case </h2></center>
    <!--Simplificando um switch Case com exemplo da internet! -->
    <?php
    /** @param Aqui temos um switch Case que somente verifica true ou false */
/*
    class cImageType {

        function fImage($type){
        switch($type) {
            case 'jpg':
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
*/

#simplificação simples do Switch case:


/** @param aqui criamos uma classe e utilizamos a function in_array passando uma lista */

class FileType{

     public static $image = array('jpg','png','gif',"bpm");
     public static $doc = array('doc','docx');

    static function isTypeInList($type, $list){
        return in_array($type, $list);
    }

    static function isImage($type){
        return Self::isTypeInList($type, Self::$image); //colocando dentro atributo: 'jpeg','png','gif';
        
    }
    static function isDoc($type){
        return Self::isTypeInList($type, Self::$doc); //colocando dento atributo;
    }
}

/** @param Instanciamos a classe e fazemos a validação da imagem */

$FileType = new FileType();
$a = 'bpm';
if($FileType::isImage($a)){
    // e uma imagem valida;

    echo strtoupper("<b> E uma imagem valida </b>");
}else{

         throw new Exception("Não e possivel Processar!!");
    
} 
/** @param finalizamos a aplicação!! */
?>
<!-- Fim do arquivo HTML -->
<script src="../JavaScript-Model/model.js"></script>    
</body>
</html>

