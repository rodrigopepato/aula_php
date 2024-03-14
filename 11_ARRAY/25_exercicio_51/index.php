<?php

$notas = [
  'Rodrigo' => 9.9,
  'Pauli' => 8.5,
  'Lucy' => 4.5,
  'Miguel' => 7.3,
  'Danielle' => 2.3,
  'Ana' => 6.4
];

arsort($notas);
// print_r($notas);

?>

<h1>Notas:</h1>
<ol>
  <?php foreach ($notas as $nome => $value): ?>
    <li><?= $nome ?> => Sua nota: <?= $value?> </li>
  <?php endforeach; ?>
</ol>