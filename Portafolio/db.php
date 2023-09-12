<?php
    /*session_start();
    $conn =mysqli_connect(
        'localhost',
        'root',
        '',
        'php_mysql_crud'
    );

   */ //if(isset($conn)){
        //echo 'DB is connected';
   // }
   function db(){
    $host = "localhost";
    $user = "root";
    $pass = "";

    $bd = "php_mysql_crud";

    $connect=mysqli_connect($host, $user, $pass);

    mysqli_select_db($connect, $bd);

    return $connect;
}
?>