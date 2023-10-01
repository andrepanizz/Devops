<?php
for($i=0; $i < 10; $i++ ){
    echo $i . "<br>";
    
}
echo "<hr>";
for($i=0; $i < 1000; $i+=5){
    echo $i . "<br>";
}
// criando um exemplo dentro do for com IF:
    for($i = 0; $i < 1000; $i+=5){
        if($i >= 200 && $i <= 800 )continue;
        if($i === 900) break;
        echo $i . "<br>";

    }

?>