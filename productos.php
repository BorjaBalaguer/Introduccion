<?php
    $productos = ["1" => "Producto 1", "2" => "Producto 2", "3" => "Producto 3"];
?>

<!doctype html>

<html lang="es">

<head>

<meta charset="utf-8">

<title></title>

<meta name="author" content="Borja Balaguer">

</head>    

<body>
<?php

$idProducto = $_GET["idProducto"] ?? 0;
if(array_key_exists($idProducto, $productos)){
    echo("Producto valido!");
}else{
    echo("Producto no existe");
    http_response_code(404);
}

?>
</body>

</html>