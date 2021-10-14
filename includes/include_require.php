<div class="titulo">Include e Require</div>
<?php
ini_set('display_errors',1);

echo 'Usando include com arquivos inexistentes';
include('include_inexistente.php');
echo '<br>Mesmo que o arquivo include_inexistente.php não exista, a aplicação continua seu funcionamento.';
echo '<br><br>';
echo 'Usando require com arquivos inexistentes';
require('require_inexistente.php');
echo '<br>Com require, os arquivos inexistentes causam um erro fatal, impossibilitando a visualização da aplicação.';