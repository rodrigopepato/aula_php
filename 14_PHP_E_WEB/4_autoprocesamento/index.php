<?php

$method = $_SERVER['REQUEST_METHOD'];
$nome = "";

if ($method == 'POST') {
    if (!empty($_POST['nome'])) {
        $nome = $_POST['nome'];
    } else {
        $nome = ""; // Define $nome como vazio se o campo estiver em branco
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    if ($method == 'GET' || empty($nome)): // Verifica se o método é GET ou se o nome está vazio
  ?>
      <form action="index.php" method="POST">
      <div>
        <input type="text" name="nome" placeholder="Digite seu nome">
      </div>
      <div>
        <input type="submit" value="Enviar">
      </div>
    </form>
  <?php
    else:
  ?>
    <h1>O seu nome é: <?= $nome?>. </h1>
  <?php
    endif;
  ?>
</body>
</html>
