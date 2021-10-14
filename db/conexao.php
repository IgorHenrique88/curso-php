<?php

function novaConexao($banco = 'curso_php'){
    $servidor = '127.0.0.1:3306'; // Ip de acesso ao servidor;
    $usuario = 'curso_video'; // Usuario de acesso ao banco de dador;
    $senha = 'curso_video'; // Senha de acesso ao banco de dador;


    $conexao = new mysqli($servidor, $usuario, $senha, $banco);

    if($conexao-> connect_error){
        die('Erro: ' . $conexao-> connect_error);
    }

    return $conexao;
}