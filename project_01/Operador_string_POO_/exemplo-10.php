<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../css/style.css"/>
    <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen"/> 
    <title>Utilização do Parent</title>
    <!-- Exemplo de Parent utilizando Classe PAI no PHP, exemplo-10.php -->
    <br>
</head>
<body>
    <h2><center> Utilizando o Parent </center></h2>
    <br>

<?php
/** @param Utilizando o Parent dentro das classes */



class Pai {
    protected $caneta = "azul";

    public function getPen(){
        return $this->caneta;
        
    }
    
}


class Filha extends Pai {
    public function recovery()
    {
        echo parent::getPen();
        # ou Pai::getPen();
        
    }
}

// exemplo pratico;

?>
    
</body>
</html>
