<?php

class Humano
{
  public $idade = 23;
  public $nome = "Rodrigo";

  public function falar()
  {
    echo "Oi, eu estou falando <br>" ;
  }
}

class Professor extends Humano
{

  public $materia;
  public $escola;

  public function horasTrabalhadas($horas)
  {
    echo "O professor $this->nome trabalhou: $horas";
  }

}

$rodrigo = new Professor;

$rodrigo->horasTrabalhadas(10);
echo "<br>";
$rodrigo->escola = "CMPM";
echo "$rodrigo->escola <br>";

$pauli = new Humano;

echo $pauli->idade . "<br>";