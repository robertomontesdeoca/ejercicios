<?php
    if($_POST){//Si post tiene envio entra el if 

    
   //Ricibir informacion del formulario HTML(Metodo POST)
    $txtNombre=$_POST['txtNombre'];
    $txtApellido=$_POST['txtApellido'];
    echo  "Hola".$txtNombre." ".$txtApellido;//Imprimo el valor 
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="ejercicio5.php" method="post">
    Nombre:
    <input type="text" name="txtNombre" id="">
    <br>
    Apellido
    <input type="text" name="txtApellido" id="">
    <input type="submit" value="Enviar">
    
</body>
</html>