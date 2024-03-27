<?php

  $host = "localhost";
  $db = "cursophp";
  $user = "root";
  $pass = "";

  $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

  $stmt = $conn->prepare("SELECT * FROM itens WHERE id > :id");

  $id = 3;

  $stmt->bindParam(":id", $id);

  $stmt->execute();

  $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

  print_r($resultado);