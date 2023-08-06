<?php
    /*
    Crie um script em PHP que crie um vetor de 5 elementos inteiros com valores aleatórios,
    entre 0 e 10. Encontre e mostre o menor elemento e sua posição no vetor.
    */
    
    $arr = [];
    $menor = 11;
    for ($i = 0; $i<5; $i++) {
        $arr[$i] = rand(0,10);
        if ($arr[$i] < $menor) {
            $menor = $arr[$i];
        }
    }
    $index = array_search($menor, $arr);
    echo "<pre> O menor elemento do ", print_r($arr), "</pre>";
    echo "<br>", "é $menor e está no index $index";

    // 