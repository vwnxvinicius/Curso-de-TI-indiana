<?php

require_once "Carro.php";

$carro = new Carro(4, "Azul");

$carro->setVelocidade(-5);
echo $carro->getVelocidade();
echo PHP_EOL;
