<?php
    // Termine o script abaixo, imprimindo todos os números entre $numero1 e $numero2.
    $numero1 = 7;
    $numero2 = 27;

    // for
    for ($i = $numero1+1; $i < $numero2; $i++) {
        echo "$i, ";
    }

    echo "<br>";

    // while
    $x = $numero1+1;
    while ($x < $numero2) {
        echo "$x, ";
        $x++;
    }