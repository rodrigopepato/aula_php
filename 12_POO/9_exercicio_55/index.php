<?php

class Car 
{
  public $portas;
  public $velocidadeMaxima;

  function setVelocidadeMaxima($vel)
  {
    $this->velocidadeMaxima = $vel;    
  }

  function getVelocidadeMaxima()
  {
    echo "A velocidade maxima desse carro é $this->velocidadeMaxima";
  }
}

$ferrari = new Car;

$ferrari->setVelocidadeMaxima(300);

echo $ferrari->getVelocidadeMaxima();



// class Pessoa
// {
//   public $nome;
//   public $idade;

//   public function recebeDados($nom, $ida)
//   {
//     $this->nome = $nom;
//     $this->idade = $ida;
//   }

//   public function mostraDados()
//   {
//     return "o nome da pessoa é " . $this->nome . " tem " . $this->idade;
//   }

// }

// $rodrigo = new Pessoa;

// $rodrigo->recebeDados("Rodrigo", 25);

// echo $rodrigo->mostraDados();