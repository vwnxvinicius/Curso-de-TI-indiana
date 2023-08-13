<?php

require_once "Carro.php";

$carro = new Carro(4, "Azul");

echo $carro->cor;
echo PHP_EOL;
echo $carro->getCor();