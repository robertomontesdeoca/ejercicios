<?php
    class UnaClase{

        public static function unMetodo(){//metodo estatico
            echo "Hola soy un metodo estatico  ";
        }
    }

    $obj=new UnaClase();
    $obj->unMetodo();
?>