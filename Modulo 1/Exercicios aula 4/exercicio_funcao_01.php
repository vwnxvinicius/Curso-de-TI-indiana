<?php
    /*
    Crie uma função que receba 2 valores inteiros como argumentos e retorne a sua soma.
    Se o valor da soma for negativo a função deverá retorar o valor 0.
    */
    function soma($n1, $n2)
    {
        $soma = $n1 + $n2;
        $resp = $soma > 0 ? $soma : 0;
        return $resp;
    }
    
    echo soma(5, 5), "<br>";
    echo soma(-10, 5), "<br>";
    echo soma(-2, 5), "<br>";