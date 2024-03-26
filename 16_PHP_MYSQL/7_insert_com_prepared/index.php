<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "cursophp";

  
  $conn = new mysqli($host, $user, $pass, $db);

  $nome = "Suporte de Microfone";
  $descricao = "Suporte novo, nunca usado";

  $stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (?, ?)");

  $stmt->bind_param("ss", $nome, $descricao); // s=> string, i=>inteiro, d=>double

  $stmt->execute();