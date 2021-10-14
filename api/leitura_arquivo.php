<div class="titulo">Leitura de arquivo</div>
<?php
// Lendo arquivo definindo quantos caracteres quero ver
echo '<strong>Exibindo a quantidade de caracteres que quero do arquivo</strong><br>';
$arquivo = fopen('teste.txt', 'r');
echo fread($arquivo, 10) . '<br>';
echo fread($arquivo, 10) . '<br>';
fclose($arquivo);

echo '<hr>';

// Lendo o arquivo todo.
// Obs.: Devo tomar cuidado com esse processo, dependendo do tamanho do arquivo pode travar o servidor.
echo '<strong>Apresentando todo o conteúdo do arquivo</strong><br>';
$arquivo = fopen('teste.txt', 'r');
$tamanho = filesize('teste.txt');
echo $tamanho . '<br>';
echo fread($arquivo, $tamanho) . '<br>';
fclose($arquivo);

echo '<hr>';

// Lendo linha por linha no arquivo
echo '<strong>Forma de ler linha por linha</strong><br>';
$arquivo = fopen('teste.txt', 'r');
echo fgets($arquivo) . '<br>';
echo fgets($arquivo) . '<br>';
var_dump(fgets($arquivo));
echo '<br>';
fclose($arquivo);

echo '<hr>';

// Percorrendo toda o arquivo até o final e exibindo
echo '<strong>Percorrendo todo o arquivo até o final e exibindo</strong><br>';
$arquivo = fopen('teste.txt', 'r');
while(!feof($arquivo)) {
    echo fgets($arquivo) . '<br>';    
} 
fclose($arquivo);

echo '<hr>';

// Percorrendo toda o arquivo até o final caracter por caracter
echo '<strong>Percorrendo todo o arquivo até o final caracter por caracter</strong><br>';
$arquivo = fopen('teste.txt', 'r');
while(!feof($arquivo)) {
    echo fgetc($arquivo) . '  ';    
} 
fclose($arquivo);

echo '<hr>';

// Abrindo o arquivo como leitura e acrescentando valores
echo '<strong>Abrindo o arquivo como leitura e acrescentando valores</strong><br>';
$arquivo = fopen('teste.txt', 'r+');
while(!feof($arquivo)) {
    echo fgets($arquivo) . '<br>';    
} 
fwrite($arquivo, "\n Adicionado no modo de leitura");
fclose($arquivo);