<div class="titulos">Datas #02</div>
<?php
$formatoData01 = 'D, d\d\e M \d\e Y';
$formatoData02 = '%A, %d de %B de %Y';
$formatoDataHora = '%A, %d de %B de %Y  - %H:%M:%S';

$agora = new DateTime();
echo '<pre>';
print_r($agora);
echo '<pre>';

echo $agora-> format($formatoData01) . '<br>';

setlocale(LC_TIME, 'pt_BR.UTF-8');
echo strftime($formatoData02, $agora-> getTimestamp()) . '<br>';

$amanha = new DateTime('+1 year');
echo strftime($formatoData02, $amanha-> getTimestamp()) . '<br>';

$dataFixa = new DateTime('2020-03-20 11:30:00');
echo strftime($formatoDataHora, $dataFixa-> getTimestamp()) . '<br>';

$amanha-> modify('+1 day');
echo strftime($formatoDataHora, $amanha-> getTimestamp()) . '<br>';

$amanha-> setDate(2020, 03, 20);
echo strftime($formatoDataHora, $amanha-> getTimestamp()) . '<br>';


$dataPassada = new DateTime('2000-05-17');
$dataFutura =  new DateTime('2030-11-26');
$outraData = new DateTime('2030-11-26');

echo ($amanha > $dataPassada ? 'Maior' : 'Menor') . '<br>';
echo ($amanha > $dataFutura ? 'Maior' : 'Menor') . '<br>';
echo $outraData == $dataPassada ? 'Igual' : 'Diferente' . '<br>';


$tz = new DateTimeZone('America/Sao_Paulo');
$agora = new DateTime(null, $tz);
echo $agora-> format('d/M/Y H:i:s');