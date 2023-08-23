<?php
//datos de conexion al servidor 
$servidor ="localhost";//127.0.0.1
$usuario="root";
$contrasenia="";
try{
    //Clase que nos permitira conectarnos 
    $conexion=new PDO("mysql:host=$servidor;dbname=album",$usuario,$contrasenia);
   
    //Para ver si se comete error al conectar 
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  
    $sql="INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'Jugando con la programacion ', 'foto.jpg')";
   
    //Metodo de PDO
   $conexion->exec($sql);
   
    echo" Conexion establecidad";

}catch(PDOException $error){
    echo" Conexion erronea".$error;
}
?>