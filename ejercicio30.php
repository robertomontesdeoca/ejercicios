<?php
    session_start();//Se crean datos que se mantienen como usuario logeado
    $_SESSION["usuario"]="develoteca";
    $_SESSION["estatus"]="logueado";
     
    echo "Sesion iniciada".":<br/>";
    echo "Usuario:".$_SESSION["usuario"]."estatus".$_SESSION["estatus"];
?>