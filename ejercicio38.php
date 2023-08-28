<?php

    //1-Abrimos el archivo modo lectura
    $archivo="contenido.txt";
    //2-Abrimos el archivo modo lectura 
    $archivoAbierto=fopen($archivo,"r");
    //3-Luego llemos todo el contenido de ese archivo 
    $contenido=fread($archivoAbierto,filesize($archivo));
   //4-Se imprime 
    echo $contenido;
?>