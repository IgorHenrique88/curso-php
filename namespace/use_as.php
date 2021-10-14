<?php namespace Outtro\Nome; ?>
<div class="titulo">Use/As</div>

<?php
include_once('use_as_arquivo.php');

echo __NAMESPACE__.'<br>';


function soma($a , $b){
    return $a . $b;
}

class Classe {
    public $var;

    function func(){
        echo __NAMESPACE__ . ' -> ' . __CLASS__ . ' -> ' .__METHOD__.'<br>';
    }
}

//Para acessar o arquivo use_as_arquivo.php, como namespace usa o endereço relativo, devo referenciar todo o caminho relativo do arquivo ex.: 

echo "Assim não vai funcionar: Nome\Bem\Grande\constante<br>";
echo 'Assim vai funcionar:  \Nome\Bem\Grande\constante:  '.\Nome\Bem\Grande\constante . '<br>';

echo "Usando 'use' <br>";

// Utilizando o use, consigo pegar qualquer variavel de um arquivo namespace utilizando o caminho relativo.
use const \Nome\Bem\Grande\constante;
echo 'use a váriavel: '.constante.'<br>';

// Utilizando a allias
use Nome\Bem\Grande as ctx;

echo soma(1, 3) . '<br>';
echo ctx\soma(1, 3) . '<br>';

// use function Nome\Bem\Grande\soma;
use function Nome\Bem\Grande\soma as somaReal;
echo somaReal(100, 200) . '<br>';
