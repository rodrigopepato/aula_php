<?php

class Humano
{

}

class Animal
{

}

class Programador extends Humano
{

}

$pauli = new Programador;

$rodrigo = new Humano;

$tigre = new Animal;

if ($rodrigo instanceof Humano) 
{
  echo "Rodrigo é um Humano <br>";
}
else 
{
  echo "Rodrigo é um Animal <br>";
}

if ($tigre instanceof Humano) 
{
  echo "Tigre é um Humano <br>";
}
else 
{
  echo "Tigre é um Animal <br>";
}

if ($pauli instanceof Programador) 
{
  echo "Pauli é um Humano <br>";
}
else 
{
  echo "Pauli é um Animal <br>";
}

