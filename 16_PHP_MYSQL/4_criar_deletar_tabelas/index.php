<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "cursophp";

  $conn = new mysqli($host, $user, $pass, $db);

  // para rodar basta dar reload na página
  // $q = "CREATE TABLE test (nome VARCHAR(100), sobrenome VARCHAR(100))";

  $q = "DROP TABLE test";

  $conn->query($q);

  $conn->close();