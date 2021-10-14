<div class="titulo">Criar Tabela</div>

<?php

require_once "conexao.php";

$sql = "CREATE TABLE IF NOT EXISTS  cadastro (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(200) NOT NULL,
        nascimento DATE,
        email VARCHAR(200)NOT NULL,
        site VARCHAR(200),
        filhos INT,
        salario FLOAT
)";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado) {
    echo "Sucesso :D!";
} else {
    echo "Error: " . $conexao->error;
}

$conexao->close();