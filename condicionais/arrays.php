<?php

    $competicao = "Copa do Brasil";
    $times = array("Corinthians","Flamengo","São Paulo","Fluminense");

    print_r($times);

    var_dump($times);

    echo "\n $times[1]\n";

    //ARRAY ASSOCIATIVO

    $times2 = [
        "Serie A" => array(
            "Avai" => "Azul e Branco",
            "Cuiaba" => "Verde e Amarelo"
        ),
        "Serie B" => array(        
        "Bahia" => "Azul e Vermelho",
        "Vasco" => "Preto e Branco"
        )
    ];

    print_r($times2);
    var_dump($times2);

    echo $times2["Serie B"]["Vasco"];
    echo "\n <br/>";

?>
