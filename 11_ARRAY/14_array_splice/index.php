<?php

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

//RESGATA ELEMENTOS REMOVIDOS
//REMOVE ELEMENTOS DO ARRAY


$removidos = array_splice($arr, 1, 4);

print_r($arr);
echo "<br>";

print_r($removidos);
echo "<br>";
echo "<br>";

$arr2 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$removidos2 = array_splice($arr2, 4);

print_r($arr2);
echo "<br>";

print_r($removidos2);
echo "<br>";
echo "<br>";


$arr3 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$removidos3 = array_splice($arr3, 3, -2);

print_r($arr3);
echo "<br>";

print_r($removidos3);
echo "<br>";
echo "<br>";
