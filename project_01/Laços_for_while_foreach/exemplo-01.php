<?php
//Exemplo de Laço for:

    for($i=0; $i < 10; $i++){

        echo $i . "<br>";

    }
    echo "<hr>";
    ///////////////////////////////////////////////////////////////////////
    for($i=0; $i < 1000; $i+=5){

        echo $i . "<br>";

    }
    echo "<hr>";
    ///////////////////////////////////////////////////////////////////////
    for($i=0; $i < 1000; $i+=5){
        //condicional com if usando o break e o continue:
            if($i > 200 && $i < 800)continue;
            if($i === 900)break;
            echo $i . "<br>";

    }
    echo "<hr>";
    //////////////////////////////////////////////////////////////////////
    



?>