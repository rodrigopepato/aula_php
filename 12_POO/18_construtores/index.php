<?php

  class Car 
  {
    public $motor;
    public $cor;
    public $ano;

    function __construct($motor, $cor, $ano)
    {
      $this->motor = $motor;
      $this->cor = $cor;
      $this->ano = $ano;
    }
  }

  $kwid = new Car(1.0, "prata", 2019);

  echo "O kwid tem motor: " . number_format($kwid->motor, 1) . ", é da cor: $kwid->cor, e é do ano: $kwid->ano <br>";