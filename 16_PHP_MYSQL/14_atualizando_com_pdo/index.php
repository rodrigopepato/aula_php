<?php

  $host = "localhost";
  $db = "cursophp";
  $user = "root";
  $pass = "";

  $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

  $stmt = $conn->prepare("UPDATE itens SET nome = :nome, descricao = :descricao WHERE id = :id ");

  $nome = "Fone de ouvido";
  $descricao = "Fone de ouvido ainda na caixa com garantia";
  $id = 12;
  
  $stmt->bindParam(":nome", $nome);
  $stmt->bindParam(":descricao", $descricao);
  $stmt->bindParam(":id", $id);
  
  $stmt->execute();