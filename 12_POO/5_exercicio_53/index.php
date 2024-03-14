<?php

class Cachorro
{
  function latir()
  {
    echo "Laika está latindo: au au au <br>";
  }

  function andar($m)
  {
    echo "O cachorro andou $m metros. <br>";
  }
}

$laika = new Cachorro;
$laika->latir();
$laika->andar(5);