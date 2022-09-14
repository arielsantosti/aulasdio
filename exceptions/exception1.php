<?php
    function f1()
    {
        echo "Função f1 posicionada antes da Exceção.".'<br/>';
    }
    
    function f2($int)
    {
        try{
            if(!is_int($int))
            {
                throw new Exception("Exceção encontrada, a variável deve ser do tipo int!");
            }else
            {
                echo "Tudo certo, nenhuma exceção encontrada e a idade é: $int".'<br/>';
            }

            f3();
            
        }catch(Exception $e){
            echo "Exceção capturada: ". $e->getMessage();
        }

        //FINALLY É OPCINAL NO TRY CATCH
        finally{
            echo "</br> Exceção tratada!";
        }
    }

    function f3()
    {
        echo "<br/> Função f3 depois da Exceção";
    }

    // CHAMANDO AS FUNÇÕES

    f1();

    f2(20.5);

?>