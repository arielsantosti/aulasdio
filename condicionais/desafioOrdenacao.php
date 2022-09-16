<?php

    //DESAFIO BOOBLE SORT, ORDENANDO NUMEROS EM UM ARRAY

    $arrayDesordenado = array(0,3,5,1);
    $tamanhoArray = count($arrayDesordenado);

print_r($arrayDesordenado);


    $repete = 2;
    while($repete < $tamanhoArray){
        $apoio;
        for($x=0; $x < $tamanhoArray-1; $x++){ 
            //echo "\n".$arrayDesordenado[$x].'$x';
            for ($y=$x+1; $y<=$x+1; $y++) { 
                echo $arrayDesordenado[$x]." X ".$arrayDesordenado[$y]." | ";
                if($arrayDesordenado[$x]>$arrayDesordenado[$y]){
                    
                    $apoio = $arrayDesordenado[$y];

                    $arrayDesordenado[$y] = $arrayDesordenado[$x];
                    $arrayDesordenado[$x] = $apoio;

                }
                
            }

            
        }
        $repete++;
    }
    print_r($arrayDesordenado);