<?php

$txtNombre="";
$rdgLenguaje="";

if (!$_POST) {
    $txtNombre=(isset($_POST['txtNombre'])) ? $_POST['txtNombre']:"";
    $rdgLenguaje=(isset($_POST['lenguaje'])) ? $_POST['lenguaje']:"";
    print_r($rdgLenguaje);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <?php if(!$_POST){ ?>
     <strong> Hola</strong>:<?php echo $txtNombre. "<br/> ";?>
     <strong>Tu lenguaje es: </strong><?php echo $rdgLenguaje ?>
     <?php } ?>
       
    <form action="ejercicio31.php" method="post"></form>
    Nombre:<br/> 
    <input value="<?php echo $txtNombre;?>" type="text" name="txtNombre" id="">
    <br/> 
    ¿Te gusta?:<br/> 
    <br/> php: <input type="radio" <?php echo($rdgLenguaje=="php")? "checked":""; ?>  name="lenguaje" id=""><br/>
    <br/> html :<input type="radio" <?php echo($rdgLenguaje=="html")? "checked":""; ?> name="lenguaje" id=""><br/>
    <br/> css :<input type="radio" <?php echo($rdgLenguaje=="css")? "checked":""; ?>  name="lenguaje" id=""><br/>

    <input type="submit" value ="Enviar informacion">


</body>
</html>