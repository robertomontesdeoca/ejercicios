<?php
    $frutas=array("f"=>"fresa","p"=>"Pera","m"=>"manzana");
    print_r($frutas);
    echo $frutas["p"]."<br/>";
    foreach($frutas as $indice=>$valor){
    echo $valor." tiene indice  ".$indice."<br>";
    // echo $frutas[$indice]."<br/>";
}
    
?> 