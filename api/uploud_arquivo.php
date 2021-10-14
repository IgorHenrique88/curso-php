<div class="titulo">Uploud</div>

<form action="#" method="post" enctype="multipart/form-data">
    <input type="file" name="arquivo">
    <button>Enviar</button>
</form>


<?php
    /*
        Fazendo uploud de qualquer arquivo com PHP
    */
    echo '<br>Informações do arquivo<br>';
    print_r($_FILES);

    if($_FILES && $_FILES['arquivo']){
        //Caminho da pasta onde vou salvar o arquivo
        $movPasta = '/Users/adm_igor.azevedo/Desktop/TestePHP/';
        //Nome do arquivo que vou salvar
        $nomeArquivo = $_FILES['arquivo']['name'];
        //Arquivo salvo temporariamento
        $tmp = $_FILES['arquivo']['tmp_name'];
        $arquivo = $movPasta . $nomeArquivo;
        if(move_uploaded_file($tmp, $arquivo)){
            echo "<br>Arquivo enviado com sucesso para a pasta TestePHP";
        } else {
            echo "<br>O arquivo não foi enviado.";
        }
    }
?>

<style>
    input, button {
        font-size: 1.5rem;
    }
</style>