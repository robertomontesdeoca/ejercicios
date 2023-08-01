
<?php
    if($_POST){
        $valorA=$_POST['valorA'];
        $valorB=$_POST['valorB'];
        
        //suma
        $suma=$valorA+$valorB;
        echo $suma."</br>";

        //resta
        $resta=$valorA-$valorB;
        echo $resta."</br>";

        //divider 
        $divider=$valorA/$valorB;
        echo $divider."</br>";

        //multiplicar 
        $multiplicar=$valorA*$valorB;
        echo $multiplicar."</br>";

        //resto
        $resto=$valorA%$valorB;
        echo $resto."</br>";

        if(($valorA!=$valorB) && ($valorA>$valorB)){
            echo "El valor de A no es igual que el valor de B";

        }
        
        if($valorA==$valorB){
            echo "El valor de A es igual que el valor de B";
        }
        

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritmeticos </title>
</head>
<body>
    <form action="ejercicio11.php" method="post">
    valor A:
    <input type="text" name="valorA" id="">
    valorB:
    <input type="text" name="valorB" id="">

    <input type="submit" value="Calcular">

    </form>
</body>
</html>
