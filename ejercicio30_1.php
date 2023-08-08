<?php
    session_start();//Se crean datos que se mantienen como usuario logeado
    
     
    echo "Sesion iniciada 30.1".":<br/>";
    if(isset($_SESSION["usuario"])){
         echo "Usuario:".$_SESSION["usuario"]."estatus".$_SESSION["estatus"];
    }
    else{
        echo "No hay datos ";
    }
   
?>