<?php namespace App; ?>
<div class="titulo">Sub-Namespace</div>

<?php

echo __NAMESPACE__.'<br>';
const constant = 123;

namespace App\Principal;
echo __NAMESPACE__.'<br>';
const constant = 234;

namespace App\Principal\Especifico;
echo __NAMESPACE__.'<br>';
const constant = 345;


echo '<br>';
echo constant.' Executar assim mostra a constante declarada no ultimo namespace<br>';
echo \App\constant .' App<br>';
echo \App\Principal\constant .' App\Principal <br>';
echo \App\Principal\Especifico\constant .' App\Principal\Especifico <br>';