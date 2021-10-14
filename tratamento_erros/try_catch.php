<div class="titulo">Try & Catch</div>

<?php
/*
    Em PHP preciso definir o tipo de erro dentro do bloco catch
*/
try {
    echo intdiv(7, 0);
} catch(Error $e) {
    echo 'Tive um erro aqui<br>';
    /*
        Dentro do bloco catch tem o nom "Error", ele é o tipo de tratamento que o catch fai tratar.
    */
}


try {
    /*
        Com a classe Exception consigo, tratar determinadas esseções que o código venha acontecer.
    */
    throw new Exception('Um erro muito estranho');
    echo intdiv(7, 0);
} catch(DivisionByZeroError $e) {
    echo 'Divisão por zero<br>';
} catch(Throwable $e) {
    echo 'Erro encontrado: ' . $e-> getMessage() . '<br>';
} finally {
    echo 'Sempre executado!<br>';
}

// try {
//     require_once('tratamento_erros/teste_require_once.php');
// } finally {
//     echo 'Sempre executado!<br>';
// }