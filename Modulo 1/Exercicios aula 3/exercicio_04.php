<?php

    /*
    Termine o script abaixo, verificando se a variável $numero é par ou ímpar e 
    exiba na tela a mensagem “número par” ou “numero impar”*/

    $numero = 7;

    // Operador ternário
    $resp = $numero%2==0 ? "Número par" : "Número ímpar";
    echo $resp;


    echo "<br>";

    // if e else
    if ($numero % 2==0)
    {
        echo "Número par";
    } 
    else 
    {
        echo "Número ímpar";
    }