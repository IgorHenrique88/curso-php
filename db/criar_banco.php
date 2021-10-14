<div class="titulo">Consexão com Banco</div>

<?php

require_once "conexao.php";

$conexao = novaConexao(null);
$sql = 'CREATE DATABASE IF NOT EXISTS curso_php';

$resultado = $conexao->query($sql);

if($resultado) {
    echo "Sucesso :D!";
} else {
    echo "Error: " . $conexao->error;
}

$conexao->close();
