<?php

$arr = [1, 2, 3, 4];

$arr2 = [3, 4, 5, 6];

$diff = array_diff($arr, $arr2);
print_r($diff);
echo "<br>";

$diff2 = array_diff($arr2, $arr);
print_r($diff2);