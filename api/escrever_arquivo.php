<div class="titulo">Escrever Arquivos</div>
<?php
// w -> escrita
// a -> acrescentar
// x -> novos arquivos
$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, "Valor inicial\n");
$str = "Segunda linha\n";
fwrite($arquivo, $str);
fclose($arquivo);

$arquivo = fopen('teste.txt', 'w');
// Toda vez que abro um arquivo no modo escrica $arquivo = fopen('teste.txt', 'w'); o mesmo é sobscrito. 
fwrite($arquivo, "Novo Conteúdo ");
fclose($arquivo);

$arquivo = fopen('teste.txt', 'a');
fwrite($arquivo, "com novos valores\n");
fwrite($arquivo, "Adicionados em um segundo momento");
fclose($arquivo);

ini_set('display_errors', 1);
$arquivo = fopen('teste.txt', 'x');
