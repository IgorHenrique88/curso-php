<div class="titulo">Excluir Registro #02</div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<?php
require_once "conexao.php";

$sql = "SELECT id, nome, email, nascimento FROM cadastro";
$conexao = novaConexao();
$resultado = $conexao->query($sql);

$registros = [];
if($resultado->num_rows > 0){
    while($row = $resultado->fetch_assoc()){
        $registros[] = $row;
    }
} elseif ($conexao->error){
    echo "Erro: " . $conexao->error;
}
$conexao->close();
?>

<table class="table table-hover">
    <thead>
        <th>ID</th>        
        <th>Nome</th>        
        <th>Nascimento</th>
        <th>E-mail</th>
        <th>Ações</th>

    </thead>
    <tbody>
        <?php foreach($registros as $registro): ?>
            <tr>
                <td><?= $registro['id'] ?></td>
                <td><?= $registro['nome'] ?></td>
                <td><?= $registro['nascimento'] ?></td>
                <td><?= $registro['email'] ?></td>
                <td>
                    <a 
                        href="http://localhost/curso-php/exercicio.php?dir=db&file=excluir02&" 
                        class="btn btn-danger">Excluir
                    </a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
