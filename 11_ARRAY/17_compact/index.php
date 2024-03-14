<?php

$marca = "BMW";
$motor = 2.5;
$item = "Teto solar";
$portas = 4;

$carro = compact("marca", "motor", "item", "portas");

print_r($carro);