<?php

class Animal
{
  public $nome;

  function escolherNome($nome)
  {
    $this->nome = $nome;
  }

  function latir()
  {
    return "au au <br>";
  }

  function latirForte()
  {
    return strtoupper($this->latir());
  }
}

$laika = new Animal;

echo "O nome do animal é : $laika->nome <br>";

$laika->escolherNome("Laika");

echo "O nome do animal é : $laika->nome <br>";

echo $laika->latir();

echo $laika->latirForte();


