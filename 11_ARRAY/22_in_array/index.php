<?php

$arr = ["maçã", "melancia", "uva", "limão", "laranja"];

if (in_array("laranja", $arr)) 
{
  echo "A fruta laranja está no array <br>";
}
else 
{
  echo "A fruta laranja não está no array <br>";
}

$fruta = "maçã";

if (in_array($fruta, $arr)) 
{
  echo "A fruta $fruta está no array <br>";
}
else 
{
  echo "A fruta $fruta não está no array <br>";
}

if (in_array("abacate", $arr)) 
{
  echo "A fruta abacate está no array <br>";
}
else 
{
  echo "A fruta abacate não está no array <br>";
}

