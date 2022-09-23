<?php
$longitud = array ("Borja" => "Hace todo lo que puede",
                   "Pepe" => "No hace nada, y no acude a clase",
                   "Lucas" => "Lo hace todo");


function ordenar($a,$b){
    if(strlen($a) == strlen($b)) return 0;
    
    return (strlen($a) > strlen($b) ? -1 : 1);
  }

uasort($longitud, "ordenar");
print_r($longitud);
?>