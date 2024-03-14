<?php

$x = 0;

while ($x <= 10)
{
    echo "Loop numero: $x <br>";

        if ($x == 6 || $x == 8)
        {
            echo "Pulei o numero: $x <br>";

            $x++;

            continue;
        }

    $x++;
}