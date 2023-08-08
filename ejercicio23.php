<?php
    $frutas=array("fresa","Pera","manzana");
    
    array_push($frutas, "uva", "arándano");
    print_r($frutas);
    foreach($frutas as $indice=>$valor){
    echo $valor." tiene indice  ".$indice."<br>";
    // echo $frutas[$indice]."<br/>";
}
?> 