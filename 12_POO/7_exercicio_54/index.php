<?php

class Pessoa 
{
  public $nome;
  public $idade;

  function andar($m)
  {
    echo "E eu andei $m metros <br>";
  }
}

$rodrigo = new Pessoa;

$rodrigo->nome = "Rodrigo";
$rodrigo->idade = 23;

echo "O meu nome é $rodrigo->nome e tenho $rodrigo->idade anos <br>";
echo $rodrigo->andar(500) . "<br>";