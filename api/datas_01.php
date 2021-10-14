<div class="titulo">Datas #01</div>
<?php

echo 'Quantidade de segundos do dia atual até o dia 01/01/1970 00:00:00 -> ' . time() . '<br>';
echo date('D, d \d\e M \d\e Y H:i') . '<br>';
echo strftime('%A, %d de %B de %Y', time()) . '<br>';

setlocale(LC_TIME, 'pt_BR');
echo strftime('%A, %d de %B de %Y', time()) . '<br>';

$amanha = time() + (24 * 60 * 60);

echo 'A quantidade de segundos de amanha é: ' . $amanha . '<br>';
echo strftime('%A, %d de %B de %Y', $amanha) . '<br>';

$proximaSemana = strtotime('+1 week');
echo strftime('%A, %d de %B de %Y', $proximaSemana) . '<br>';

$dataFixa = mktime(15,35,12,11,27,1996);
echo strftime('%A, %d de %B de %Y %H:%M:%S', $dataFixa) . '<br>';