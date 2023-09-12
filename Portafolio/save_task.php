<?php
include ("db.php");
$con = db();
        // session_start();
        if (isset($_POST['save_task'])) {
        $title=$_POST['title'];
        $description=$_POST['description'];
        //echo $title."<br>";
        //echo $description."<br>";
        // header("location:login.php");
         $query="INSERT INTO task (title, description) VALUE('$title','$description')"; 
         $result=mysqli_query($con,$query);
         if(!$result){
         die("Query Failed");
         }
         //$_SESSION['message']='Task Saved succesfully';
         //$_SESSION['message_type']='success';
         Header("Location: index.php");
         //redirecciono nuevamente a index
         header("Location: index.php");

    } 
?>