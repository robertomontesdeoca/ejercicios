<?php 
    include("db.php");
    $con=db();

    $id=$_GET['id'];

    $sql="SELECT * FROM task WHERE id='$id'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Editar usuarios</title>
        
    </head>
    <body>
        <div class="users-form">
            <form action="edit.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['id']?>">
                <input type="text" name="title" placeholder="Title" value="<?= $row['title']?>">
                <input type="text" name="description" placeholder="Description" value="<?= $row['description']?>">
                
                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>