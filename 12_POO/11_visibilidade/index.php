<?php

class Car 
{
  public $roda= 5;
  protected $pelicula = "Sem película";
  private $vidro = 2;

  public function getVidro()
  {
    return $this->vidro;
  }

  public function getPelicula()
  {
    return $this->pelicula;
  }
}

class Mecanico
{
  public function alterarRodas($objeto, $novoValor)
  {
    $objeto->rodas = $novoValor;
  }
}

$carro = new Car;
$carro->rodas = 8;
echo "O carro tem: $carro->rodas rodas <br>";

$rodrigo = new Mecanico;
$rodrigo->alterarRodas($carro, 65);
echo "O carro tem: $carro->rodas rodas <br>";

// Não consigo acessar a propriedade pelipucla pois ela é protected
// echo "O carro tem: $carro->pelicula rodas <br>";

echo "O carro tem: " . $carro->getPelicula() . "<br>";

// Não consigo acessar a propriedade pelipucla pois ela é private
// echo $carro->vidro . "<br>";
echo "O carro tem: " . $carro->getVidro() . " vidros <br>";