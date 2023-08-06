<?php
    /*
     Crie uma função em PHP que calcule e imprima o salário reajustado de um funcionário
    de acordo com a seguinte regra:
    • salários até R$ 3.000,00 , reajuste de 50%
    • salários de R$ 3.000,00 ou mais, reajuste de 30%
    */
    function reajuste($salario)
    {
        $porcentagem = $salario < 3000 ? 0.5 : 0.3;
        return $salario + $salario*$porcentagem;
    }
    echo reajuste(5000), "<br>";
    echo reajuste(2000), "<br>";