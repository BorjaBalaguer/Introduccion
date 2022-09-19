<?php
$nombres =array('Pepe','Borja','Luis');
$arrayalreves= array_reverse($nombres);
echo count($nombres) . "<br>";
echo implode(' ', $nombres) . "<br>";
asort($nombres);
echo implode(' ', $nombres) . "<br>";
echo implode(' ',$arrayalreves) . "<br>";
$posicion = array_search('Borja', $nombres) + 1;
echo($posicion);

$alumnos = [
    ["id" => 1, "nombre" => "Antonio", "edad" => 21],
    ["id" => 2, "nombre" => "Stefan", "edad" => 18],
    ["id" => 3, "nombre" => "Borja", "edad" => 19],
    ["id" => 4, "nombre" => "Joel", "edad" => 20]
];

$tabla = '<table border="1">';
foreach ($alumnos as $key) {
    $tabla.='<tr>';
    foreach ($key as $b) {
        $tabla .= '<td>'.$b.'</td>';
    }
    $tabla .= '</tr>';
}
$tabla .= '</table>';
echo $tabla;
?>
<br>
<?php
$columnas = array_column($alumnos, 'nombre');
print_r($columnas);
?>
<br>
<?php
$numeros = array(1,5,6,9,2,123,7,14,22,31);
echo array_sum($numeros);
?>