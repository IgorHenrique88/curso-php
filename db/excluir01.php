<div class="titulo">Excluir Registro #01</div>

<?php

require_once "conexao.php";

$sql = "DELETE FROM cadastro WHERE id = 2";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado){
    echo "Sucesso :)";
} else {
    echo "Echo: " . $conexao->error;
}

$conexao->close();