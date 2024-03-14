<?php

abstract class Teste 
{
  public static function TestandoClasse()
  {
    echo "Este método é de uma classe abstrata <br>";
  }

  abstract public function testeAbs();

}

// $s = new Teste; -> NÃO PODE INSTANCIAR UMA CLASSE ABSTRATA

Teste::TestandoClasse();

class Nova extends Teste
{

  public function testeAbs()
  {
    echo "Teste método abstrato <br>";
  }

}

$n = new Nova;
$n->testeAbs();
