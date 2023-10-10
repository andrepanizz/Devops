<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../logo/php.png"/>
    <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen"/> 
    <title>POO review </title>
</head>
<body>
    
<?php
class define {
    
    protected string $a; 
    protected string $b; 

    public function __construct($value1,$value2)
    {
        $this->a = $value1;
        $this->b = $value2;
                
    }
    //adicionando getters:

    public function getLetra_A():string
    {
        return $this->a;
    }
    public function getLetra_B():string
    {
        return $this->b;
    }

    public function __toString()
    {
        return ucfirst(" <strong> Maridinho Nenem: </strong>").$this->a . "<br> " .ucfirst("<strong> Esposinha Linda: </strong>") .  $this->b . "<br><br>";
        

    }

    public function definition()
    {
        $as = array("som","carro");
        array_push($as, "rodas","vidros", "Portas");

        $arrs = get_defined_vars();

        foreach($arrs['as'] as $key => $value){
            echo " " . $key . ": " . $value . "<br>";
            echo "<hr>";
        }

        

        //print_r($arrs['as']) . "<br>";
    }

    public function filhos()
    {
        echo ucwords("Melissa Rodrigues") . "<br>";
        echo ucwords("Rebecca Rodrigues") . "<br>";

    }


}

class andre extends define {
public function view()
{
    global $objeto;
    return array("Esposa querida" => $this->b,
                 "Marido Maravilhoso" => $this->a,
                "Filhos: " => $objeto->filhos()
            );
}

}

$objeto = new define("andre", "erica");
$objeto2 = new andre("andre", "erica");
//echo $objeto . "<br>"; //toString
//print_r($objeto2->getLetra_A()) . "<br>";
//echo "<br>";
//print_r($objeto2->getLetra_B()) . "<br>";
//echo "<br>";
echo "<hr>";
print_r($objeto2->definition()) . "<br>";
echo "<br>";
print_r($objeto2->view());
echo "<br>";

echo "<br>"; 
echo "<hr>";


/*
$a = array(1,2,3,4,5,6,7,8,9,10);
$arr = get_defined_vars();
print_r($arr['a']) . "<br>";
echo "<hr>";

$n1 = "produto";
$n2 = "funds_cash";
$n3 = "property_name";

$f = array($n1,$n2,$n3);
$andre = get_defined_vars();
print_r($andre['f']) . "<br>";
echo "<hr>";
*/

?>
</body>
</html>