<?php
$temperaturas = "12,22,3,4,5,26,7,8,19,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30";

$dias = explode(",", $temperaturas);
$suma = array_sum($dias);
$media = $suma / count($dias);
$media = number_format($media, 2);
asort($dias);
$temeperaturasMinimas = array_slice($dias, 0 ,5);
echo("Temperaturas minimas: " . "<br>");
foreach ($temeperaturasMinimas as $key => $val) {
    echo "$key = $val\n" . "<br>";
}
$temeperaturasMaximas = array_slice($dias, -5 ,5);
echo("Temperaturas maximas: " . "<br>");
foreach ($temeperaturasMaximas as $key => $val) {
    echo "$key = $val\n" . "<br>";
}
echo("Media de las temperaturas:" . "<br>" . $media);
?>