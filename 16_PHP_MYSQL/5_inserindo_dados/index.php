<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "cursophp";

  $conn = new mysqli($host, $user, $pass, $db);

  // pode ser assim:

  // $q = "INSERT INTO itens (nome, descricao) VALUES ('xícara', 'xícara personalizada')";

  // Ou pode ser passando os dados pela variável

  $table = "itens";
  $nome = "xícara";
  $descricao = "xícara personalizada";

  $q = "INSERT INTO $table (nome, descricao) VALUES ('$nome ', '$descricao')";

  $conn->query($q);

  $conn->close();