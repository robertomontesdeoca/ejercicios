<?php
 include("db.php");
$con = db();

$sql = "SELECT * FROM task";
$query = mysqli_query($con, $sql);
?>

<?php include("includes/header.php")?>

    <h1>Hello World</h1>
    
   <div class="container p-4">

    <div class="row">

     <div class="col-md-4">

     <?php if(isset($_SESSION['message'])) {?>
        <div class="alert alert-<?=$_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
            <?=$_SESSION['message']  ?>

       
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
        <!--se limpia la session  -->
     <?php session_unset() ;}?>

     <div class="card card-body">
        <form action="save_task.php" method="POST">
        <div class="form-group">
            <input  class="form-control" type="text" name="title" placeholder="Task Title" autofocus>
        </div>

        <div class="form-group">
            <textarea name="description" cols="30" rows="2" class="form-control" placeholder="Task description"></textarea>
        </div>

        <input type="submit" class="btn btn-success btn-block" name="save_task" value="Save Task" >
       
    </form>
    </div>

    </div>
</div>
    <div class="col-md-8">
     <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Created At</th>
                <th>Actions</th>

            </tr>
        </thead>

     <tbody>        
        <div class="users-form">
        <h1>Crear usuario</h1>
        <form action="save_task.php" method="POST">

        <!--   //<input type="text" name="title" placeholder="Title">
            <input type="text" name="description" placeholder="Description">
            <input type="submit" value="Agregar">
        --> 
        </form>
    </div>
            <?php 
            //$query="SELECT * FROM task ";
            //$result_tasks=mysqli_query($conn,$sql);
            
            while($row=mysqli_fetch_array($query)):?>
                    <tr>
                        <td><?= $row['title']?></td>
                        <td><?= $row['description']?></td>
                        <td><?= $row['created_at']?></td>
                        <th><a href="update.php?id=<?= $row['id'] ?>" class="btn btn-secondary">Editar <i class="fas fa-marker "></i></a></th>
                        <th><a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-danger" >Eliminar <i  class="fa fa-trash-alt"></i></a></th>
                    </tr>
         <?php endwhile;?>
        </tbody>
     </table>   
    </div>
</div>

<?php include("includes/pie.php");?>