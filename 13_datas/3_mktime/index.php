<?php

$dataNascimento = mktime(14, 45, 10, 04, 06, 2000);

$dataFormatada = date("d/m/Y", $dataNascimento);
echo "$dataFormatada <br>";

