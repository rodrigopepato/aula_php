<?php

  $host = "localhost";
  $db = "cursophp";
  $user = "root";
  $pass = "";

  $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

  $stmt = $conn->prepare("INSERT INTO itens (nome, descricao) 
    VALUES (:nome, :descricao)");

  $nome = "Suporte para microfone";
  $descricao = "Suporte para microfone vindo do JAPAAAAAo";

  $stmt->bindParam(":nome", $nome);
  $stmt->bindParam(":descricao", $descricao);

  $stmt->execute();