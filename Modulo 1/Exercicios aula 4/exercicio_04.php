<?php

    /*
    Seu salário atual é de R$5.000,00. O do seu colega é de R$2.500,00.
    Suponha que você tenha 10% de aumento todo ano e seu colega 20%. 
    Crie um script que calcula em quantos anos seu colega irá passar a ganhar mais que você.
    */

    $sal1 = 5000;
    $sal2 = 2500;
    $count = 0;

    while ($sal2 < $sal1) {
        $sal1 += ($sal1*10)/100;
        $sal2 += ($sal2*20)/100;
        $count += 1;
    }

    echo "O salário dele irá ultrapassar o meu em $count anos";