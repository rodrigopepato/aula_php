<?php

class Pessoa 
{

    function falar(): void
    {
      echo "oi, eu sou um objeto <br>";
    }

    function soma($a, $b)
    {
      echo $a + $b . "<br>";
    }
}

$rodrigo = new Pessoa;

$rodrigo->falar();
$rodrigo->soma(12, 50);

$pauli = new Pessoa;
$pauli-> falar();
$pauli-> soma(1, 1);