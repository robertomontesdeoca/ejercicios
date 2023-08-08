<?php
    class UnaClase{
            //Metodo estatico se llaman sin necesidad de crear instancia 
        public static function unMetodo(){//metodo estatico, 
            echo "Hola soy un metodo estatico  ";
        }
    }

   // $obj=new UnaClase();
   // $obj->unMetodo();

    UnaClase::unMetodo();
?>