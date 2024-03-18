<?php

$usuario = [
  'nome' => 'Rodrigo',
  'idade' => 23,
  'profissao' => 'Programador'

];
if (isset($usuario))
{
  $nome = $usuario['nome'];
  $idade = $usuario['idade'];
  $profissao = $usuario['profissao'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario</title>
</head>
<body>
  <form action="index.php">
    <div>
      <input type="text" name="nome" placeholder="Digite seu nome" 
        value="<?= $nome ?>">
    </div>
    <div>
      <input type="text" name="idade" placeholder="Digite sua dade" 
        value="<?= $idade ?>">
    </div>
    <div>
      <input type="text" name="profissao" placeholder="Digite sua profissão" 
        value="<?= $profissao ?>">
    </div>
    <div>
      <input type="submit" value="Enviar" >
    </div>
  </form>
</body>
</html>
