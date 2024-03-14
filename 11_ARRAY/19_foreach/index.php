<?php

$rodrigo = [
  'nome' => 'Rodrigo',
  'idade' => 23,
  'profissão' => 'estagiário'
];

foreach ($rodrigo as $caracteristicas => $value) 
{
  echo "$caracteristicas : $value <br>"; 
}