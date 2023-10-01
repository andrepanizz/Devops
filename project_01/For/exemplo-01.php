<?php
//1º condição, a primeira vai criar um contador, 
//2º O for vai funcionar enquanto o $i for menor que 10;
//3º Somaremos de 1 em 1 ++ caso eu queira mais de 1 +=(e o valor)
for($i=0; $i<10; $i++)
{
  // O que vc quer que repita no caso:
  echo $i . "<br>";
}
echo "<hr>";
////////////////////////////////////////////////////////////////////////////////////////////

for($i=; $i < 1000; $i=+5)
{
  echo $i . "<br>";
}
echo "<hr>";
//////////////////////////////////////////////////////////////////////////////////////////
//fazemos o teste do break e do continue;
for($i = 0; $i < 1000; $i=+1):
echo $i . "<br>";
endfor;
echo "<hr>";
/////////////////////////////////////////////////////////////////////////////////////////
for($i = 0; $i < 1000; $i+=5):
if($i >= 200 && $i <= 800) continue:
if($i < 900) break;
  echo $i . "<br>";
endif;
    endfor;
////////////////////////////////////////////////////////////////////////////////////////    



?>
