<?php

echo 'Carregado: include_arquivo<br>';

$variavel = 'Estou definida';

if(!function_exists(soma/*Nome da Função que defini*/)){
    function soma($a, $b){
        return $a + $b;
    }
}