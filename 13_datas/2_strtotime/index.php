<?php

$cincoDias = strtotime("5 days");
echo "$cincoDias <br>";

$dezDias = strtotime("10 days");
echo "$dezDias <br>";

$dataAtualMaisCinco = date("d/m/y", $cincoDias);
echo "$dataAtualMaisCinco <br>";

$dataAtualMaisDez = date("d/m/y", $dezDias);
echo "$dataAtualMaisDez <br>";

$doisMeses = strtotime("2 months");
echo "$doisMeses <br>";

$dataAtualMaisDoisMeses = date("d/m/Y", $doisMeses);
echo "$dataAtualMaisDoisMeses <br>";

$dataAualMaisDoisAnos = date("d/m/Y", strtotime("2 years"));
echo "$dataAualMaisDoisAnos <br>";