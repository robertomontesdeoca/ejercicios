<?php
include("db.php");
$con = db();
if (isset($_GET['id'])) {
   $id=$_GET["id"];

   //El problema esta en el id si escribo id = $id
   $query = "DELETE FROM task WHERE id = '$id'";
  // $query="DELETE FROM task  WHERE id =  $id";
   $result= mysqli_query($con,$query);
    if (!$result) {
       die("Query Failed");
    }

    $_SESSION['message']='Task Remove Successfully';

    $_SESSION['message_type']='danger';

    header("Location: index.php");
}
?>