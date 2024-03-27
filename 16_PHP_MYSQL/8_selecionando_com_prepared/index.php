<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "cursophp";
  
  $conn = new mysqli($host, $user, $pass, $db);

  $id = 4;

  $stmt = $conn->prepare("SELECT * FROM itens WHERE id > ?");

  $stmt->bind_param("i", $id);

  $stmt->execute();

  $resultado = $stmt->get_result();

  $data = $resultado->fetch_all();

  print_r($data);

  $conn->close();

