<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 14 PHP</title>
    </head>
    <body>
        <?php
        echo "<h1>Ejercicio 14: Vectores (asociativos)</h1>";
        echo "<p>Consigna: Crear un vector asociativo que almacene las claves de acceso de 5 usuarios de un sistema. Acceder a cada componente por su nombre. Imprimir una componente del vector</p>";
        
        // Vector asociativo con nombres de usuario (claves) y contraseñas (valores)
        $claves_acceso = array(
        "emanuelszevaga"    => "123456789",
        "mariagomez"   => "contrademaria",
        "desarrollador"     => "hola_mundo2003",
        "ingeniero"     => "ingensistemas",
        "administrador"     => "admin2024"
        );

        // Acceder a las componentes por su nombre
        echo "<h2>Claves de Acceso:</h2>";
        echo "<p>Clave de emanuelszevaga: " . $claves_acceso["emanuelszevaga"] . "</p>";
        echo "<p>Clave de mariagomez: " . $claves_acceso["mariagomez"] . "</p>";
        echo "<p>Clave de desarrollador: " . $claves_acceso["desarrollador"] . "</p>";
        echo "<p>Clave de ingeniero: " . $claves_acceso["ingeniero"] . "</p>";
        echo "<p>Clave de administrador: " . $claves_acceso["administrador"] . "</p>";

        // Imprimir una componente del vector 
        $usuario_a_imprimir = "administrador";
        $clave_especifica = $claves_acceso[$usuario_a_imprimir];

        echo "<h2>Clave de un Usuario Específico</h2>";
        echo "<p>La clave de acceso para el usuario $usuario_a_imprimir es: $clave_especifica</p>";
                
        ?>
    </body>
</html>