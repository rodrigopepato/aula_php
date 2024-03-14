<?php

$arr = [
  'porta' => 100,
  'carro' => 20000,
  'notbook' => 4300,
  'video game' => 5000,
  'caneta' => 4,
  'lapis' => 2
];

function verificarPreco($array)
{
  $arrItensCaros = [];

  foreach ($array as $item => $preco)
  {
    if ($preco > 10) 
    {
      array_push($arrItensCaros, $item);
    }
  }
  return $arrItensCaros;
}

$precoAlto = verificarPreco($arr);

print_r($precoAlto);