<?php

$a = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
$b = 0;

while ($b < count($a))
{
    $numeroAtual = $a[$b];
    
        if ($numeroAtual == 30 || $numeroAtual == 40) 
        {
            echo "Pulando esse elemento <br>";
            $b++;
            continue;
        }

    print_r("Elemento: " . $numeroAtual);
    echo "<br>";
    
    $b++;
}

