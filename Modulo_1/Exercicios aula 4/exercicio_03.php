<?php
    /*
    Crie um script em PHP crie dois vetores de 10 posições 
    preenchidos com valores aleatórios. Faça a soma dos elementos de mesmo índice,
    colocando o resultado em um terceiro vetor. Imprima os três vetores, um após o outro. 
    
    Obs: Utilize um for
    */
    
    $arr1 = [];
    $arr2 = [];
    $arr3 = [];

    for ($i = 0; $i < 10; $i++) {
        $arr1[$i] = rand(0, 10);
        $arr2[$i] = rand(0, 10);
        $arr3[$i] = $arr1[$i] + $arr2[$i];
    }

    echo "<pre> -- 1 -- ", print_r($arr1), "</pre>";
    echo "<pre> -- 2 -- ", print_r($arr2), "</pre>";
    echo "<pre> -- 3 -- ", print_r($arr3), "</pre>";
