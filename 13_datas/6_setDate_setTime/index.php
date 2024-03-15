<?php

$data = new DateTime();

print_r($data);
echo "<br>";

$data->setDate(2000, 04, 06);
print_r($data);
echo "<br>";

$data->setTime(14, 04, 06);
print_r($data);
echo "<br>";

echo $data->format("d/m/Y") . "<br>";