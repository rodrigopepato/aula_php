<?php

class Humano
{
  public $idade;
  protected $nome;
  private $nacionalidade;

  public function mudarNacionalidade($pais)
  {
    return $this->nacionalidade = $pais;
  }
}

class Programador extends Humano
{
  public function setNome($NovoNome)
  {
    $this->nome = $NovoNome;
  }

  public function getNome()
  {
    return $this->nome;
  }
}

$rodrigo = new Humano;

echo "A nacionalidade do Rodrigo é: " . $rodrigo->mudarNacionalidade("brasileiro") . "<br>";


$pauli = new Programador;
$pauli->idade = 24;
echo "A idade de pauli é: $pauli->idade <br>";
$pauli->setNome("Pauli");
echo "O nome da nova programadora é: " . $pauli->getNome();