<?php
session_start();
    if($_POST){
            if(($_POST['usuario']=="develoteca")&& ($_POST['contraseña']=="12345")){
               
                $_SESSION['usuario']="develoteca";

               header("location:index.php");
               
                echo "Logueado ok";
            }
            else {
                echo "<script>alert('Usuario o contraseña incorrecta');</script>";
            }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    
      <div class="row">

        <div class="col-md-4">
        </div>

          <div class="col-md-4">
            <br>
           </div>
       <div class="card">
            <br>
        <div class="card-header">
            Iniciar sesion
        </div>
        <div class="card-body">
     <form action="login.php" method="post">
     
     Usuario develoteca:<input class="form-control" type="text" name="usuario" id="">
    <br>
     Contraseña 12345:<input class="form-control" type="password" name="contraseña" id="">
    <br>
    <button class="btn btn-success" type="submit" >Entra al portafolio</button>
    </form>

    </div>
    <div class="card-footer text-muted">
            
    </div>
    </div>

        <div class="col-md-4">

           </div>

       </div>
   </div>
    

    
</body>
</html>