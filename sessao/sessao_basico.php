<div class="titulo">Básico Sessão</div>

<?php
//Quando precisamos trabalhar com sessão devemos colocar a função session_start();

session_start();

print_r($_SESSION);
echo '<br>';

if(!$_SESSION['nome']){
    $_SESSION['nome'] = 'Igor';
}


if(!$_SESSION['email']){
    $_SESSION['email'] = 'igor@azemail.com';
}

?>

<p>
    <a href="/curso-php/sessao/basico_sessao_alterar.php">Alterar Sessao</a>
</p>