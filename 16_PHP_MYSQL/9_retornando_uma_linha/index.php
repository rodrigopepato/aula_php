<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "cursophp";
  
  $conn = new mysqli($host, $user, $pass, $db);

  $id = 2;

  $stmt = $conn->prepare("SELECT * FROM itens WHERE id = ?");

  $stmt->bind_param("i", $id);

  $stmt->execute();

  $resultado = $stmt->get_result();

  $data = $resultado->fetch_row();

  print_r($data);

  $conn->close();

