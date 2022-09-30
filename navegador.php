<?php

    $navigator = ($_SERVER['HTTP_USER_AGENT']);

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
    if (strpos($navigator, 'Firefox') == FALSE) {
        echo "Por favor entra con el navegador de Mozilla";
    }else{
        echo("Te presento mi pagina!");
    }

?>
</body>

</html>