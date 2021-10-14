<div class="titulo">Download</div>

<?php
    session_start();

    $arquivos = $_SESSION['arquivos'] ?? [];

    $pastaUploud = __DIR__ . '/../files/';
    $nomeArquivo = $_FILES['arquivo']['name'];
    $arquivo = $pastaUploud . $nomeArquivo;
    $arquivoTemp = $_FILES['arquivo']['tmp_name'];
    
    if($_FILES['arquivo']['type'] == 'image/jpeg'){
        if(move_uploaded_file($arquivoTemp, $arquivo)){
          echo "O arquivo foi feito uploud com susesso";
          $arquivos[] = $nomeArquivo;
          $_SESSION['arquivos'] = $arquivos;
        }
    } else {
        echo "O arquivo não foi feito uploud com susesso";        
    }
?>


<form action="#" method="post" enctype="multipart/form-data">
    <input type="file" name="arquivo" id="arquivo">
    <button>Enviar</button>
</form>
<ul>
    <?php foreach($arquivos as $arquivo): ?>
        <li>
            <a href="../curso-php/files/<?= $arquivo?>">
                <img src="../curso-php/files/<?= $arquivo?>" height="200" width="200">
            </a>
        </li>
    <?php endforeach?>
</ul>

<style>
    input, button {
        font-size: 1.4rem;  
    }

</style>
