<?php
    /*
    Crie uma função em PHP que receba a altura e o peso de uma pessoa, 
    calcule seu IMC de acordo com a fórmula abaixo:
    IMC = Peso dividido pela altura ao quadrado ( peso ÷ (altura²)).
    A função deve retornar uma string (magreza, normal. sobrepeso ou obesidade) 
    de acordo com a tabela abaixo:

    MAGREZA < 18.5
    NORMAL 18.5 a 24.9
    SOBREPESO 24.9 a 30
    OBESIDADE > 30
    */

    function calc_imc($altura, $peso)
    {
        $imc = ($peso / ($altura**2));
        if ($imc < 18.5)
        {
            $resp = "Magreza";
        }
        else if ($imc < 24.9) 
        {
            $resp = "Normal";
        }
        
        else if ($imc < 30) 
        {
            $resp = "Sobrepeso";
        }
        else if ($imc > 30) 
        {
            $resp = "Obesidade";
        }

        return $resp;
    }

    echo calc_imc(1.68, 49), "<br>";
    echo calc_imc(1.68, 63), "<br>";
    echo calc_imc(1.68, 73), "<br>";
    echo calc_imc(1.68, 93), "<br>";