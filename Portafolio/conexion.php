<?php 
/*
 class db{
        private $servidor="localhost";
        private $usuario="root";
        private $contraseña="";
        private $conexion;

        public function _construct(){
            try{
                $this->conexion=new PDO ("mysql:host=$this->servidor;dbname=album",$this->usuario,$this->contraseña);
                $this->conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e){
                return "falla de conexion".$e;
        }
    }

    public function ejecutar($sql){
       $this->conexion->system($sql);
        return $this->conexion->lastInsertId();
        
    }

    public function consultar($sql){
        $sentencia=$this->conexion->prepare();
        $sentencia->execute();
        return $sentencia->fetchAll();
    }
    
 }
*/

?>
