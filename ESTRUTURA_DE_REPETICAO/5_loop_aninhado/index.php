<?php


$i = 1;

while ($i <= 10)
{
    echo "Loop externo  $i  <br";

    $j = 0;

        while ($j <= 5)
        {
            echo "Loop interno  $j  <br>";

            $j++;
        }

    $i++;
}