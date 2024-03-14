<?php

trait Obejto
{

  public $idade = 32;

  public function teste()
  {
    echo "Testando trait de um objeto <br>";
  }
}

trait Testando
{
  public function traitTestando()
  {
    echo "Testando outra trait <br>";
  }
}


class Central
{
  use Obejto;
  use Testando;
}

$x = new Central;

$x->teste();
echo $x->idade . "<br>";

$x->traitTestando();