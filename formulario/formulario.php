<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="titulo">Formulario</div>

<h2>Cadastro</h2>
<!-- 
    Com a função filter_input consigo verificar se o campo expecificado está setado, uma alternativa para isset()
 -->
<?php
if(count($_POST) > 0){
    $erros = [];

    if(!filter_input(INPUT_POST, "nome")){
        $erros['nome'] = 'Nome é obrigatório';
    }
    if(filter_input(INPUT_POST, "nascimento")){
        $data = DateTime::createFromFormat('d/m/Y', $_POST['nascimento']);
        if(!$data){
            $erros['nascimento'] = 'Data deve estar no padrão DD/MM/YYYY<br>';
        }
    }

    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        if(count($_POST['email']) > 0){
            $erros['email'] = 'E-mail inválido<br>';
        }
    }

    if(!filter_var($_POST['site'], FILTER_VALIDATE_URL)){
        $erros['site'] = 'Site inválido<br>';
    }

    $filhorConfig = ["options" => ["min_range" => 0, "max_range" => 20]];
    if(!filter_var($_POST['filhos'], FILTER_VALIDATE_INT, $filhorConfig) && $_POST['filhos'] != 0){
        $erros['filhos'] = 'Quantidade de filhos inválida<br>';
    }

    $salarioConfig = ['option' => ['decimal' => ',']];
    if(!filter_var($_POST['salario'], FILTER_VALIDATE_FLOAT, $salarioConfig)){
        $erros['salario'] = 'Salário inválido<br>';
    }
}
?>


<?php foreach($erros as $erro): ?>
    <div class="alert alert-danger" role="alert">
        <?=$erro ?>     
    </div>
<?php endforeach ?>


<form action="#" method="post">
    <div class="form-row">
        <div class="form-group col-md-9">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="<?= $_POST['nome']?>">
        </div>
        <div class="form-group col-md-3">
            <label for="nascimento">Nascimento</label>
            <input type="text" class="form-control" id="nascimento" name="nascimento"  placeholder="Data de nascimento" value="<?= $_POST['nascimento']?>">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="E-mail" value="<?= $_POST['email']?>">
        </div>
        <div class="form-group col-md-6">
            <label for="site">Site</label>
            <input type="text" class="form-control" id="site" name="site" placeholder="Site" value="<?= $_POST['site']?>">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="filhos">Qtd Filhos </label>
            <input type="number" class="form-control" id="filhos" name="filhos" placeholder="Qtd Filhos" value="<?= $_POST['filhos']?>">
        </div>
        <div class="form-group col-md-6">
            <label for="salario">Salário</label>
            <input type="text" class="form-control" id="salario" name="salario" placeholder="Salário" value="<?= $_POST['salario']?>">
        </div>
    </div>
    <button class="btn btn-primary btn-lg">Cadastrar</button>
</form>