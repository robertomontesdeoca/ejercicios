<?php
  class persona {

    public $nombre;//Propiedades 
    private $edad;//se accede solo mediante los metodos y solo desde la clase que lo definio 
    protected $altura;//se accede solo mediante los metodos y solo desde la clase que lo definio y las heredadas 

    //Utilizando contructores 
    function __construct($nuevoNombre){
      $this->nombre=$nuevoNombre;
    }
    
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
        echo "Hola soy ".$this->nombre;
    }
  }
  
  $objAlumno=new persona("Jose Ramon el dueño del camion"."<br>");//Contructor para  creacion de un objeto 
  //$objAlumno2=new persona();
  //$objAlumno->asignarNombre("Roberto"."<br>");
 // $objAlumno2->asignarNombre("Jerson"."<br>");
  echo $objAlumno->nombre;
  echo $objAlumno->asignarEdad(32)."<br>";
  echo $objAlumno->asignarAltura(1.79);
  echo $objAlumno->imprimirNombre();
  ?>