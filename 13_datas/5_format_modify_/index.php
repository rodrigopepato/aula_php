<?php

// Data atual
$data = new DateTime();

echo $data->format("d/m/Y") . "<br>";

echo $data->format("D - M - Y") . "<br>";

echo $data->format("l, F, Y") . "<br>";

// Data modificada

$data->modify("+5 days");
echo $data->format("D/M/Y") . "<br>";

$data->modify("+5 Months");
echo $data->format("d/m/Y") . "<br>";

$data->modify("-3 years");
echo $data->format("d/m/Y") . "<br>";