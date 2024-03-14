<?php

function numAoQuadrado($num)
{
    return $num**2;
}


$y = numAoQuadrado(3);
echo $y . "<br>";
$y = numAoQuadrado($y);
echo $y;