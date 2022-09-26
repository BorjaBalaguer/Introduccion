<?php
function partlist($arr){
    $list =[];
    for ($i=0; $i < count($arr); $i++) { 
        $primerTrozo = array_slice($arr, 0, $i+1);
        $segundoTrozo = array_slice($arr, $i+1);

        $trozoFinal = [];
        $trozoFinal[] = implode(" ", $primerTrozo);
        $trozoFinal[] = implode(" ", $segundoTrozo);
        $list[] = $trozoFinal;
    }
    return $list;
}
    print_r(partlist(["Seguro" , "que", "apruebo","esta", "asignatura"]))
?>