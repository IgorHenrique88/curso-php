<div class="titulo">Include Once</div>
<?php
echo 'Recebendo arquivo com include<br>';
include('include_once_arquivo.php');
echo "Variável = '{$variavel}'.<br>";
$variavel = 'Variável Alterada';
echo "Variável = '{$variavel}'.<br>";

//Se chamar novamente o arquivo tadas as variáveis serão redeclaradas
echo '<br>Recebendo arquivo com require<br>';
require('include_once_arquivo.php');
echo "Note que a variável foi redefinida ='{$variavel}'.<br>";
$variavel = 'Variável Alterada';
echo "Note que a variável foi novamente alterada = '{$variavel}'.<br>";


// Se chamar o arquivo com _once a váriavel não sofre alteração pois o PHP percebeu que o arquivo já foi chamado
echo '<br>Recebendo arquivo com include_once<br>';
include_once('include_once_arquivo.php');
echo "Note que a variável não foi redefinida ='{$variavel}'.<br>";
$variavel = 'Variável Alterada';
echo "Note que a variável não foi alterada novamente = '{$variavel}'.<br>";

echo '<br>Recebendo arquivo com require_once<br>';
require_once('include_once_arquivo.php');
echo "Note que a variável não foi redefinida ='{$variavel}'.<br>";
$variavel = 'Variável Alterada';
echo "Note que a variável não foi alterada novamente = '{$variavel}'.<br>";