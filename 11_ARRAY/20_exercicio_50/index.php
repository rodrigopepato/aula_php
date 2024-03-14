<?php

$arr = [
  'Rodrigo' => 23,
  'Pauli' => 24,
  'Danielle' => 44,
  'Marianny' => 44
];

?>

<table border="2">
  <tr>
    <th> Nome </th>
    <th> Idade </th>
  </tr>
  <?php foreach ($arr as $nome => $idade): ?>
    <tr>
      <td><?= $nome; ?></td>
      <td><?= $idade; ?></td>
    </tr>
  <?php endforeach; ?>
</table>