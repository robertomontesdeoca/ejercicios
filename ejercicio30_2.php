<?php
    session_start();//Se crean datos que se mantienen como usuario logeado
    session_destroy();
   
     
    echo "Se destruyo la seccion usuario".":<br/>";
    echo "Usuario:".$_SESSION["usuario"]."estatus".$_SESSION["estatus"];
?>