<?php

class Cachorro
{
  public $nome;
  public $raca;
  public $idade;

  function __construct($nome, $raca, $idade)
  {
    $this->nome = $nome;
    $this->raca = $raca;
    $this->idade = $idade;
  }

  public function exibirDados()
  {
    echo "Nome: " . $this->nome . ", Raça: " . $this->raca . ", Idade: " . $this->idade;
  }
}

$luna = new Cachorro("Luna", "vira-lata", 5);
$luna->exibirDados();