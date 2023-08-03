<?php

    /*
    Termine o script abaixo, 
    calculando a média dos valor de $valor1, $valor2 e $valor3,
    armazenando o resultado na variável $media e exibindo na tela a mensagem: 
    Média calculada:
    [valor]*/

    $valor1 = 7;
    $valor2 = 3;
    $valor3 = 9;
    $media = ($valor1 + $valor2 + $valor3) / 3;
    echo "Média calculada: $media";

    echo "<br>";
    // Sem decimal
    
    $media2 = intdiv(($valor1 + $valor2 + $valor3), 3);
    echo "Média calculada(arredondada): $media2";