<?php include("cabecera.php");?>

<?php

if($_POST){
    print_r($_POST);
    $nombre=$_POST['nombre'];
//$objConexion =new conexion();
//$sql="INSERT INTO `proyectos` (`id`, `nombre`, `imagen`, `descripcion`) VALUES ('', '.$nombre.', 'imagen.jpg', 'Proyecto de hace mucho tiempo ')";
//$objConexion->ejecutar($sql);
}

/*$objConexion =new conexion();
$resultado=$objConexion->consultar("SELECT * FROM `proyectos`");
print_r($resultado);
*/
?>

<br>

<div class="container">
    <div class="row">
        <div class="col-md-6">
        <div class="card">
    <div class="card-header">
        Datos del proyecto 
    </div>
    <div class="card-body">
        <form action="portafolio.php" method="post" enctype="multipart/form-data">
    Nombre del proyecto:<input class="form-control" type="text" name="nombre" id="">
    <br>
    Imagen del proyecto:<input class="form-control" type="file" name="archivo" id="">
    <br>
    <input class="btn btn-success" type="submit" value="Enviar proyecto">
    </form>
    </div>
    
       
    </div>

    </div>    
        </div>
        <div class="col-md-6">
           <div class="table-responsive">
    <table class="table table-primary">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Imagen</th>
                <th>Imagen</th>
            </tr>
        </thead>
        <tbody>
            
            <tr>
                
            <td><a class="btn btn-danger" href="#" >Eliminar</a></td>
            </tr>
      
        </tbody>
    </table>
              </div> 
        </div>
        
    </div>
</div>

<?php include("pie.php");?>