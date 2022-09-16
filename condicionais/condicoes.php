<?php

$num1 = 100;
$num2 = 10;

if($num1 > $num2)
{
    echo "$num1 é maior que $num2 \n";

}elseif($num1 == $num2){

    echo "$num1 é igual a $num2 \n";

}else{

    echo "$num1 não é maior que $num2 \n";
}

switch($num1)
{
    case(100):
        echo "Valor = $num1";
        break;
    
    case(50):
        echo "Valor = $num1";
        break;

    case(20):
        echo "Valor = $num1";
        break;
    
}

?>