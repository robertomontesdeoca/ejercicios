<?php

$txtNombre="";
$rdgLenguaje="";
$chkphp="";
$chkhtml="";
$chkcss="";
$lsAnime="";
$txtComentario="";


if ($_POST) {
    $txtNombre=(isset($_POST['txtNombre'])) ? $_POST['txtNombre']:"";
    $rdgLenguaje=(isset($_POST['lenguaje'])) ? $_POST['lenguaje']:"";
    //print_r($rdgLenguaje);
    $chkphp=(isset($_POST['chkphp'])=="si")? "ckcked":"";
    $chkhtml=(isset($_POST['chkhtml'])=="si")? "ckcked":"";
    $chkcss=(isset($_POST['chkcss'])=="si")? "ckcked":"";

    $lsAnime=(isset($_POST['lsAnime'])? $_POST['lsAnime']: "");
    $txtComentario=(isset($_POST['txtComentario'])? $_POST['lsAnimetxtComentario']: "");
    print_r($lsAnime);
    //Instruccion de insertar 
    //Rutina de algin calculo 
    //Aqui  se puede alterar los valores anteriores para mostrar diferentes valores modificados 
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
    <?php if($_POST){ ?>
     <strong> Hola</strong>:<?php echo $txtNombre. "<br/> ";?>
     <strong>Tu lenguaje es: </strong><?php echo $rdgLenguaje ?>
     
     <strong>Estas aprediendo : </strong><br/>
     -<?php echo($chkphp=="checked")? "PHP":""; ?><br/>
     -<?php echo($chkhtml=="checked")? "HTML":""; ?><br/>
     -<?php echo($chkcss=="checked")? "CSS":""; ?><br/>

     <strong>Tu lenguaje es: </strong><br/>

     <?php } ?>
       
    <form action="ejercicio31.php" method="post"></form>
    Nombre:<br/> 
    <input value="<?php echo $txtNombre;?>" type="text" name="txtNombre" id="">
    <br/>
    
    ¿Te gusta?:<br/> 
    <br/> php: <input type="radio" <?php echo($rdgLenguaje=="php")? "checked":""; ?>  name="lenguaje" id=""><br/>
    <br/> html :<input type="radio" <?php echo($rdgLenguaje=="html")? "checked":""; ?> name="lenguaje" id=""><br/>
    <br/> css :<input type="radio" <?php echo($rdgLenguaje=="css")? "checked":""; ?>  name="lenguaje" id=""><br/>

    Estas aprediendo...<br/> 
    <br/> php:  <input type="checkbox" <?php echo $chkphp ?> name="chkphp" value="si" id="">
    <br/> html : <input type="checkbox" <?php echo $chkhtml ?> name="chkhtml" value="si" id="">
    <br/> css :<input type="checkbox" <?php echo $chkcss ?> name="chkcss" value="si" id="">

        ¿Que anime te gusta ?...<br/>
        <select name="lsAnime" id="">
        <option value="">Ninguna serie </option>
        <option value="naruto " <?php echo ($lsAnime=="naruto")? "selected":"";?>>Naruto</option>
        <option value="bleach" <?php echo ($lsAnime=="bleach")? "selected":"";?>>Bleach</option>
        <option value="dragon" <?php echo ($lsAnime=="dragon")? "selected":"";?>>Dragon Ball</option>

    </select>
        ¿Tienes alguna duda?<br/>
    <textarea name="txtComentario" id="" cols="30" rows="10">
        <?php echo $txtComentario; ?>

    </textarea>
        
    <br>
    <input type="submit" value ="Enviar informacion">


</body>
</html>