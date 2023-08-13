<?php
    /*
    Termine o script abaixo, verificando se a variável $numero valor positivo, 
    negativo ou igual a zero. Exiba na tela a mensagem: 
    "Valor Positivo", "Valor Negativo" ou "Igual a Zero".
    */
    $numero = 0;

    if ($numero < 0) 
    {
        echo "Valor Negativo";
    }
    else if ($numero > 0) 
    {
        echo "Valor Positivo";
    }
    else 
    {
        echo "Igual a zero";
    }
