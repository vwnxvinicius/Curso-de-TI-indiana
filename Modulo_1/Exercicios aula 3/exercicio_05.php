<?php

    /*
    Finalize o script abaixo verificando se valor da variável $a é maior ou menor 
    que o valor da variável $b. A mensagem a ser impressa deve ser 
    “A maior que B” ou “A menor que B”
    */

    $a = 7;
    $b = 21;

    // Operador ternário
    $resp = $a<$b ? "menor" : "maior";
    echo "A é $resp que B";

    echo "<br>";
    
    // if e else
    if ($a < $b) 
    {
        echo "A é menor que B";
    }
    else 
    {
        echo "A é maior que B";
    }