<?php
$contactos = array(

    array("codigo" => 1, "nombre" => "Juan Pérez",

    "telefono" => "966112233", "email" => "juanp@gmail.com"),

    array("codigo" => 2, "nombre" => "Ana López",

    "telefono" => "965667788", "email" => "anita@hotmail.com"),

    array("codigo" => 3, "nombre" => "Mario Montero",

    "telefono" => "965929190", "email" => "mario.mont@gmail.com"),

    array("codigo" => 4, "nombre" => "Laura Martínez",

    "telefono" => "611223344", "email" => "lm2000@gmail.com"),

    array("codigo" => 5, "nombre" => "Nora Jover",

    "telefono" => "638765432", "email" => "norajover@hotmail.com"),

    );

    echo '<br>';

        

    $filtrados = [];
    $filtrarPor = strtolower($_GET["filtrarPor"] ?? "email");
    foreach ($contactos as $contacto) {
        if (strpos(strtolower($contacto["email"]), $filtrarPor) !== FALSE) {
             $filtrados[] = $contacto;
    }
}
    print_r($filtrados);
?>