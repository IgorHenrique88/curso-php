<div class="titulo">Inserir Registro #01</div>
<?php 

require_once "conexao.php";

$sql ="INSERT INTO cadastro (nome, nascimento, email, site, filhos, salario)
       VALUES ('Marieta', '1989-10-29', 'marieta123@email.com.br', 'https://marieta.sites.com.br', 2, 13000.78)";

$conexao = novaConexao();
$resultado = $conexao-> query($sql);

if($resultado) {
    echo "Sucesso :D!";
} else {
    echo "Error: " . $conexao->error;
}
$conexao->close();