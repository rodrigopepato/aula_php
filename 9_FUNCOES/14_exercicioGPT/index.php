<?php

// Exercício 3: Fatorial
// Crie uma função chamada calculaFatorial que recebe um número inteiro como parâmetro e retorna o fatorial desse número.

/*function calculaFatorial($numero)
{
  $resultado = 1;

    for ($i= 1; $i <= $numero ; $i++) 
    { 
      $resultado *= $i;
    }
    return $resultado;
}

$numeroFatorado= calculaFatorial(4);

echo $numeroFatorado;*/



// Exercício 4: Inverso de uma String
// Crie uma função chamada inverteString que recebe uma string como parâmetro e retorna a string invertida.

// function investeString($palavra)
// {
//     $palavraInvertida = strrev($palavra);

//     return $palavraInvertida;
// }

// echo investeString("Rodrigo");


// Exercício 5: Verifica Palíndromo
// Crie uma função chamada verificaPalindromo que recebe uma string como parâmetro e retorna verdadeiro se a string for um palíndromo e falso caso contrário.


// function verificaPolindromo($palavra)
// {
//   //$palavra = strtolower($palavra);

//    return ($palavra == strrev($palavra)) ? "Sim" : "Não";
// }

// $palavraPolindromo = verificaPolindromo("Ama");

// echo $palavraPolindromo;


// Exercício 7: Geração de Senha Aleatória
// Crie uma função chamada geraSenhaAleatoria que gera e retorna uma senha aleatória com uma combinação de letras maiúsculas, minúsculas, números e caracteres especiais.

function  geraSenhaAleatoria($tamanho)
{
  $letrasMaiusculas = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $letrasMinusculas = 'abcdefghijklmnopqrstuvwxyz';
  $numeros = '0123456789';
  $caracteresEspeciais = '!@#$%^&*()-_=+[]{}|;:,.<>?';

  $todosCaracteres = $letrasMaiusculas . $letrasMinusculas . $numeros . $caracteresEspeciais;

  $senhaEmbaralhada = str_shuffle($todosCaracteres);

  $senha = substr($senhaEmbaralhada, 0, $tamanho);

  return $senha;

}

$novaSenha = geraSenhaAleatoria(8);

echo "A sua nova senha é: $novaSenha";