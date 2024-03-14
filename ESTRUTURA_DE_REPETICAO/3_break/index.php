<?php

$x = 0;

while ($x <= 10)
{
    echo $x . "<br>";

    if ($x == 5)
    {
        echo "Chegou a 5 e vou finalizar o loop" . "<br>";
        break;
    }

    $x++;
} 