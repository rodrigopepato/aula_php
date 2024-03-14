<?php

$arr = range(0, 10, 2);
$arr2 = range(0, 10, 3);
$arr3 = range(0, 99, 10);

$arrUnidos = array_merge($arr2, $arr3, $arr);

print_r($arrUnidos);