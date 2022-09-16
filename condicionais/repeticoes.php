<?php

$numeros = [5,8,7,6,1];

$tamanhoArray = count($numeros);

var_dump($tamanhoArray);

for ($i=0; $i < $tamanhoArray; $i++) { 
    echo "$numeros[$i]\n";
}

/*
    for($i = 10; $i >= 0; $i--)
    {
        echo $i."\n";
    }

    */