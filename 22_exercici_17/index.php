<?php

$a = 12;
$b = 13;

if (!($a > $b) && $b > $a)
{
    echo "Entrou no if";
    
}

echo "<br>";

echo ($a > $b && $b > $a) ? "Entrou no if" : " Não entrou no segundo if";