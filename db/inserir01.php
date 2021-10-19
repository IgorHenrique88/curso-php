<div class="titulo">Inserir Registro #01</div>
<?php 

require_once "conexao.php";

$sql ="INSERT INTO cadastro (nome, nascimento, email, site, filhos, salario)
       VALUES ('Marieta', '1989-10-29', 'marieta123@email.com.br', 'https://marieta.sites.com.br', 2, 13000.78),
       ('João Pedro', '1979-02-19', 'joaopereira@email.com.br', 'https://joaopereira.sites.com.br', 2, 13000.78),
       ('Maria Silva', '2001-11-11', 'maria_silva@email.com.br', 'https://maria_silva.sites.com.br', 0, 7800.12),
       ('Pedro Cardoso', '1993-01-23', 'pedrocardoso@email.com.br', 'https://pedrocardoso.sites.com.br', 1, 9143.78),
       ('Andre Miranda', '1999-09-01', 'andre_miranda@email.com.br', 'https://andre_miranda.sites.com.br', 0, 19980.10)       
       ";

$conexao = novaConexao();
$resultado = $conexao-> query($sql);

if($resultado) {
    echo "Sucesso :D!";
} else {
    echo "Error: " . $conexao->error;
}
$conexao->close();