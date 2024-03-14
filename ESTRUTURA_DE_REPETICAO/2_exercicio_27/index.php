<?php

$arr = ["oi", "rodrigo", 23, true, false, 12.09, 24, "pauli", 1, 0 ];

$x = 0;
$y = count($arr);

while ( $x < $y)
{
    if(is_string( $arr[$x]))
    {
        echo $arr[$x] . "<br>";
    }

    $x++;
}