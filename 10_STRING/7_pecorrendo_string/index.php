<?php

$frase = "esta frase sera para testar o strlen pecorrendo uma string";

for ($i=0; $i < strlen($frase); $i++) 
{ 
  echo "$frase[$i] <br>";
}