<div class="titulo">Gerenciando Sessão</div>
<?php
session_start();
// Exibindo o ID da sessão;
echo session_id();
// Com & consigo acessar a referencia da mémmoria.
$contador = &$_SESSION['contador'];

$contador = $contador ? $contador + 1: 1;
echo '<br>' . $_SESSION['contador'];

if($_SESSION['contador'] % 5 === 0){
    session_regenerate_id();
}
if($_SESSION['contador'] >= 10){
    session_destroy();
}