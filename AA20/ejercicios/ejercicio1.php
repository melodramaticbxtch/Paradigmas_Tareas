<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <tittle>Ejercicio 1 </tittle>
    </head>
    <body>
        <h1> </h1>
        <?php 
            $num = rand(1, 100);
         echo $num;
         echo "<br>";
         if ($num <= 50) {
            echo "El número es menor o igual a 50.";
            } else {
            echo "El número es mayor a 50."; }
        ?>
    </body> 
</html> 