<?php
$nombre = $_GET['nombre'] ?? 'Borja';
echo trim($nombre, '/');
?>
<br>
<?php
echo strlen($nombre);
?>
<br>
<?php
echo strtoupper($nombre);
?>
<br>
<?php
echo strtolower($nombre);
?>
<br>
<?php
$prefijo = $_GET['prefijo'] ?? '';
$pos = strpos($nombre, $prefijo);
if ($pos !== false) {
    echo'El prefijo es correcto';
}
?>
<br>
<?php
echo substr_count((strtoupper($nombre) . strtolower($nombre)), 'a');
?>
<br>
<?php
?>