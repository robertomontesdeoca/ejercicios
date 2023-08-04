<?php

use persona as GlobalPersona;

  class persona {

    public $nombre;//Propiedades 
    private $edad;//se accede solo mediante los metodos y solo desde la clase que lo definio 
    protected $altura;//se accede solo mediante los metodos y solo desde la clase que lo definio y las heredadas 

    public function asignarNombre($nuevoNombre){//acciones o metodos
    $this->nombre=$nuevoNombre;
    }

    public function asignarEdad($nuevoEdad){//acciones o metodos
       return $this->edad=$nuevoEdad."<br>";
        }

        public function asignarAltura($nuevoAltura ){//acciones o metodos
          return  $this->altura=$nuevoAltura."<br>";
            }

    public function imprimirNombre(){
        echo "Hola soy ".$this->nombre."<br/>";
    }
  }

 //Utilizando herencia 
  class trabajador extends persona{
    public $puesto ;//Propiedad nueva 
    public function presentarseComoTrabajador(){
      echo "Hola soy ".$this->nombre."y soy titulado de  ".$this->puesto;
    }
    
  } 
  
  $objTrabajador=new trabajador(null);
  
  $objTrabajador->asignarNombre("Ing. Roberto"."<br>");
  $objTrabajador->puesto="Ingeniero Programdor e instructor de Zumba"."<br>";
  //echo $objTrabajador->puesto;
  echo $objTrabajador->presentarseComoTrabajador();
  echo $objTrabajador->asignarEdad(32);
  echo $objTrabajador->asignarAltura(1.79);
  echo $objTrabajador->imprimirNombre();
  ?>