<div class="titulo">Include de Retorno</div>
<?php

/*
    Os métodos require e include podem ser usados como parametros de váriaveis, como mostra o exemplo a seguir.
*/

$variavelRetorno = require('return_usado.php');
echo "Retornando a váriavel $variavelRetorno<br>";
echo "Buscando a váriavel declarada no 'return_usado.php': $variavelRetornada<br>";


echo 'Podemos usar o require ou include definindo o caminho absoluto<br>';
$variavelRetorno2 = require(__DIR__.'/return_nao_usado.php');
echo "$variavelRetorno2 quando retornamos como caminho absoluto ele retorna um boolean true se for verdadeiro e false se nn for <br>";
echo "$variavelDeclarada";
