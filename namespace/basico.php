<?php namespace contexto; ?>

<div class="titulo">Exemplo básico namespace</div>

<?php

// Constante para referenciar o namespace atual;
echo __NAMESPACE__ . '<br>';

// Constante não usa $
const constante1 = 123;

// Declarando const com define
//Para esse processo, devo colocar o nome completo do namespace e o nome da váriavel
define('contexto\constante2', 234);

// Outra forma de declarar com o define
define(__NAMESPACE__.'\constante3', 345);

// Posso definir com define outro namespace mesmo q não esteja criado ainda.
define('outro_namespace\constante4', 567);

echo constante1 . '<br>';
echo constante2 . '<br>';
echo constante3 . '<br>';
echo constante4 . '<br>';