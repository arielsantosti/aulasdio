<?php

    function dividir($dividendo, $divisor){    

        try {
            if($divisor == 0)
            {
                throw new RangeException("O divisor não pode ser igual a  0");
            }

            $resultado = $dividendo / $divisor;

            echo "O resultado da divisão é: $resultado";
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }

    }

    dividir(10,0);

?>