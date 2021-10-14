<?php namespace Aritimetica;?>
<div class="titulo">Desafio </div>

<?php
class NaoInteiroException extends \Exception {

}

function intdiv ($a, $b){
    if($b == 0){
        throw new \DivisionByZeroError();
    } 
    if ($a % $b > 0){
        throw new NaoInteiroException();
    }
    return $a / $b;
}


echo intdiv(8,2);