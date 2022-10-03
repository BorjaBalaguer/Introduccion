<html>

<body>
<h2>Formulario de Borja:</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">

Nombre: <input type="text" name="nombre"><br><br>

Email: <input type="text" name="email"><br><br>

Estudios:

<select name="estudios">

    <option value="sin-estudios">Sin estudios</option>

    <option value="educacion-obligatoria" selected="selected">Educación Obligatoria</option>

    <option value="formacion-profesional">Formación profesional</option>

    <option value="universidad">Universidad</option>

</select> <br><br>

<input type="file" name="imagen" /><br><br>

<input type="submit" value="Enviar">

</form>

<?php 

echo htmlspecialchars($_SERVER["PHP_SELF"]);

function filtrado($datos){
    $datos = trim($datos); 
    $datos = stripslashes($datos);  
    $datos = htmlspecialchars($datos);
    return $datos;
}

if(isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre = filtrado($_POST["nombre"]);
    $email = filtrado($_POST["email"]);
    $estudios = filtrado($_POST["estudios"]);
    $imagen = filtrado($_POST["imagen"]);
}
?>
<?php if(isset($_POST["submit"])): ?>
    <h2>Mostrar datos enviados</h2>
    Nombre : <?= $nombre ?? "" ?> <br>
    Email : <?= $email ?? "" ?> <br>
    Estudios: <?= $estudios ?? "" ?> <br>
    Avatar :  <?= $imagen ?? "" ?> <br>
<?php endif; ?>
</body>

</html>
