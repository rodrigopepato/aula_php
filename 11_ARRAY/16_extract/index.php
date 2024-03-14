<?php

$arr = [
  'cor' => 'azul',
  'forma' => 'circular',
  'material' => 'plastico'
];

extract($arr);

echo "$cor <br>";
echo "$forma <br>";
echo "$material <br>";

echo $nome = "Gabriel" . "<br>";


$pessoa = [
  'nome' => 'Rodrigo',
  'idade' => 23
];

extract($pessoa);

echo "$nome <br>";
echo "$idade <br>"; 