<?php 

    $jsonContenido='[
        {"nombre":"Oscar","apellido":"Uh"},
        {"nombre":"Jose","apellido":"Perez"}
        
    ]';

    $resultado=json_decode($jsonContenido);
    //print_r($resultado);

    foreach($resultado as $persona){
    echo($persona->nombre)." ".($persona->apellido)."</br>";  
    }
?>

