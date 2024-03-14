<?php

class Humano
{
  public $idade;
  public $nome;
  public $profissao;

  public function falar()
  {

  }

  public function andar()
  {

  }
}

$rodrigo = new Humano;

$teste = 10;

if (is_object($rodrigo))
{
  echo "É um objeto <br>";
}
else 
{
  echo "Não é um objeto <br>";
}

if (is_object($teste))
{
  echo "É um objeto <br>";
}
else 
{
  echo "Não é um objeto <br>";
}

echo get_class($rodrigo) . "<br>";

if (method_exists($rodrigo, "falar"))
{
  echo "É um método <br>";
}
else 
{
  echo "Não é um método <br>";
}

if (method_exists($rodrigo, "asd"))
{
  echo "É um método <br>";
}
else 
{
  echo "Não é um método <br>";
}