
<?php
include("db.php");
$con=db();
//if (isset($_GET['id'])) {
  // $id=$_GET['id'];
     $id=$_POST["id"];
     $title=$_POST['title'];
      $description=$_POST['description'];

   //El problema esta en el id si escribo id = $id
   //$query = "SELECT * FROM task WHERE id = '$id'";
   $sql="UPDATE task SET title='$title', description='$description' WHERE id='$id'";
   // $query="DELETE FROM task  WHERE id =  $id";
   $result= mysqli_query($con,$sql);
   /*
    if (mysqli_num_rows($result)==1) {
      $row =mysqli_fetch_array($result);
     // $title=$row['title'];
     // $description=$row['description'];
        echo 'you can edit';
    }
*/
if($result){
  Header("Location: index.php");
}else{

}
   // $_SESSION['message']='Task Remove Successfully';

  //  $_SESSION['message_type']='danger';

//}
?>
<?php include("includes/header.php")?>