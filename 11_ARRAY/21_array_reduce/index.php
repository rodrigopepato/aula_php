<?php

$arr = [ 23, 34, 52, 645, 865, 6, 75, 87, 33, 5];


function soma($a, $b)
{
  return $a + $b;
}

$resultado = array_reduce($arr, "soma");

echo "$resultado <br>";

$resultado2 = array_reduce($arr, "soma", 1000);

echo "$resultado2 <br>";