<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "cursophp";

  
  $conn = new mysqli($host, $user, $pass, $db);

  $q = "SELECT * FROM itens";

  $result = $conn->query($q);
  $conn->close();
  // somente um Item
  // $item = $result->fetch_assoc();
  // print_r($item);


  // Todos os itens
  $itens = $result->fetch_all();
  print_r($itens);