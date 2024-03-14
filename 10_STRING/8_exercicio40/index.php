<?php

$frase = "o rato roeu a roupa do rei de Roma";

$count = 0;

for ($i=0; $i < strlen($frase) ; $i++) 
{ 


  if ($frase[$i] === "a")
  {
    $count++;
  }
}

echo $count;

