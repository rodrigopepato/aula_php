<?php

$arr = [
  'Rodrigo' => 23,
  'Pauli' => 24,
  'Lucy' => 12,
  'Miguel' => 4,
  'Danielle' => 44,
  'Ana' => 90
];

echo "Ordem crescente pelos valores: <br>";
asort($arr);
print_r($arr);
echo "<br>";

echo "Ordem decrescente pelos valores: <br>";
arsort($arr);
print_r($arr);
echo "<br>";

echo "Ordem crescente pelas chaves: <br>";
ksort($arr);
print_r($arr);
echo "<br>";

echo "Ordem decrescente pelas chaves: <br>";
krsort($arr);
print_r($arr);
echo "<br>";
