<?php

$lista = "carro - navio - helicóptero - barco - jangada";

$novaLista = explode("- ", $lista);

for ($i=0; $i < count($novaLista) ; $i++) { 
  
  echo "Item: $novaLista[$i] <br>";
  
}