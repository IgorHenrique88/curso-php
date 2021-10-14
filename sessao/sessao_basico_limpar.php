<?php
// Mesmo querendo destruir a sessão, preciso chamar a função session_start();
session_start();
/*
    Com essa função, consigo destruir a sessão logada no site.
*/
session_destroy();
// Com header() consigo localizar alguma página que definir
header('Location: sessao_basico.php');