<?php

function VelocidadeMaxima($vel)
{
    // echo "O carro atinge a velicidade máxima de $vel km/h <br>";

    // checagem

    if(is_int($vel))
    {
        echo "O carro atinge a velicidade máxima de $vel km/h <br>";
    }
    else
    {
        echo "Por favor passe um número inteiro";
    }
}

VelocidadeMaxima(300);
VelocidadeMaxima(150);
VelocidadeMaxima(260);

// posso colocar dentro de uma variavel e passa-la como parametro
$velocidade = 200;
VelocidadeMaxima($velocidade);


//PHP ignora parametro desnecessario
VelocidadeMaxima(100, "teste");



//como é uma string o PHP irá imprimir esse valor, 
//por isso é nescessário fazer uma checagem
VelocidadeMaxima("teste");