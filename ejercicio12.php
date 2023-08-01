
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valores relacionales </title>
</head>
<body>
    <form action="ejercicio9.php" method="post">
    valor A:
    <input type="text" name="valorA" id="">
    valorB:
    <input type="text" name="valorB" id="">

    <input type="submit" value="Calcular">

    </form>
</body>
</html>
<?php
    if($_POST){
        $valorA=$_POST['valorA'];
        $valorB=$_POST['valorB'];

       if($valorA ==$valorB)
            echo "El valor de A es igual al valor de B";
      
            else echo "El valor de B no es igual al valor de A";

    }
?>