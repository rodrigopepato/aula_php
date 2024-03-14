<?php

$cor = "vermelho";
$nome = "maçã";
$tamanho = "pequeno";

$fruta = compact("nome", "cor", "tamanho");

// print_r($fruta);

foreach ($fruta as $caracteristicas => $value) 
{
  echo "$caracteristicas: $value <br>";
}