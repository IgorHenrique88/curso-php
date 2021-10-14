<div class="titulo">Include Função</div>
<?php

echo 'Carregado: include_funcao <br>';

echo '--------------------------------<br>';
echo 'Estou carregando o include_arquivo com função<br>';

function carregarInclude(){
    include('include_arquivo.php');

    echo $variavel . '<br>';

    echo soma(1, 3) . '<br>';
}
/*
    Quando realizo um include dentro de uma função, estou definindo que sua utilização ocorrerá somente quando a função for chamada,
    uma prova é o exemplo a seguir, só consigo utilizar a váriavel e a função do arquivo include_arquivo depois que chamo a função,
    outro ponto, váriaveis utilizadas com include só consigo utilizar no escopo da função não como global mas, função definida no outro
    arquivo consigo usar normalmente.
*/

carregarInclude();
echo soma(5,5);