<?php

$arr = [ 
  'nome' => 'Rodrigo',
  'sobrenome' => 'Pepato'
];

  if (array_key_exists("nome", $arr)) 
  {
    echo "A chave existe! <br>";
  }
  else 
  {
    echo "A chave não existe! <br>";
  }

  if (array_key_exists("idade", $arr)) 
  {
    echo "A chave existe! <br>";
  }
  else 
  {
    echo "A chave não existe! <br>";
  }
  
  if (isset($arr['nome'])) 
  {
    echo "A chave existe com ISSET! <br>";
  }
  else 
  {
    echo "A chave não existe com ISSET! <br>";
  }

  if (isset($arr['idade'])) 
  {
    echo "A chave existe com ISSET! <br>";
  }
  else 
  {
    echo "A chave não existe com ISSET! <br>";
  }
  