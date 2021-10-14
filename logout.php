<?php
session_start();
session_destroy();

/*
    Para deslogar um usuario que teve o cook de usuario salvo devo fazer assim
*/
unset($_COOKIE['usuario']);
setcookie('usuario','');
header('Location: login.php');