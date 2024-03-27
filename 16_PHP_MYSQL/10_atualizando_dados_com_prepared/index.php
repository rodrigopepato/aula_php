<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "cursophp";
  
  $conn = new mysqli($host, $user, $pass, $db);

  $id = 9;

  $stmt = $conn->prepare("UPDATE itens SET nome = ?, descricao = ? WHERE id = ?");

  $nome = "Sofá";
  $descricao = "Sofá vindo da Europa, muito elegante";

  $stmt->bind_param("ssi", $nome, $descricao, $id);

  $stmt->execute();

  $conn->close();

  if ($stmt->error) 
  {
    echo "Erro: " . $stmt->error;
  }