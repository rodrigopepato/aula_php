<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "cursophp";
  
  $conn = new mysqli($host, $user, $pass, $db);

  $stmt = $conn->prepare("DELETE FROM itens WHERE id = ?");

  $id = 2;

  $stmt->bind_param("i", $id);


  $stmt->bind_param("iss", $id, $nome, $descricao);

  $stmt->execute();

  $conn->close();