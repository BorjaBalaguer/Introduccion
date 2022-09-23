<?php
function cuadrado($a){
    return $a * $a;
}

$array = [ 1, 2, 3, 4];
$cuadrado = array_map('cuadrado' , $array);
print_r($cuadrado);

echo '<br>' . "El valor mas alto: ";
echo max($cuadrado);
echo '<br>' . "El valor mas bajo: ";
echo min($cuadrado);
?>