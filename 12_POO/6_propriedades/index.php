<?php

 class Car 
 {
    public $rodas = 4;
    public $preco = 20000;
    public $ano;

 }

 $ferarri = new Car;

 echo "A Ferarri tem " . $ferarri->rodas . " rodas" . "<br>";
 echo $ferarri->preco . "<br>";
 echo $ferarri->ano = 2028 . "<br>";