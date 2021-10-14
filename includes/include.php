<div class="titulo">Include</div>
<?php

/*
    Caso necessário chamar o mesmo arquivo várias vezes e dentro do arquivo existir funções, posso definir uma função
    padrão do PHP chamada function_exists('Nome da Função q vou passar como parametro') essa função verifica a 
    existencia da função que passar como parametro, para defender a redefinição da função ou polimorfismo da função.
*/

echo 'Executei essa linha do arquivo include. <br>';
include('include_arquivo.php');
// include('include_arquivo.php');

echo soma(50, 1) . '<br>';

echo "O conteudo da váriavel é: {$variavel}";