<?php

interface Caracteristicas
{
  public function falar();
  
}

class Humano implements Caracteristicas
{
  public $idade = 23;

  public function falar()
  {
    echo "Estou falando <br>";
  }
}

$rodrigo = new Humano;

echo $rodrigo->falar();

$rodrigo->idade = 24;

echo $rodrigo->idade;