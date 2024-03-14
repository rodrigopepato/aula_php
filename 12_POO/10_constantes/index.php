<?php

class Humano 
{
  public const BOCA = 1;
  public const NARIZ = 1;
  public const PERNA = 2;

  public function parteDoCorpo()
  {
    echo "Um Humano tem:" . self::BOCA . "<br>";
  }
}

$rodrigo = new Humano;

echo $rodrigo::NARIZ . "<br>"; // poder ser assim
echo Humano::NARIZ . "<br>"; // ou assim 

$rodrigo->parteDoCorpo();

