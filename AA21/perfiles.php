<?php
$saludo = isset($_GET['saludo']) ? htmlspecialchars($_GET['saludo']) : 'Visitante';
$nombre = isset($_POST['nombre']) ? htmlspecialchars($_POST['nombre']) : '';
$edad   = isset($_POST['edad']) ? (int)$_POST['edad'] : 0;
$hobby  = isset($_POST['hobby']) ? htmlspecialchars($_POST['hobby']) : '';

$mensajePerfil = '';
if ($edad > 0) {
    if ($edad >= 40) {
        $mensajePerfil = "Perfil Senior";
    } elseif ($edad >= 18) {
        $mensajePerfil = "Perfil en Desarrollo";
    } else {
        $mensajePerfil = " Perfil Joven Promesa";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Generador de Tarjetas de Perfil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            text-align: center;
            padding: 20px;
        }
        form {
            background: white;
            display: inline-block;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 5px #aaa;
            margin-bottom: 20px;
        }
        .tarjeta {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px #bbb;
            padding: 20px;
            width: 250px;
            margin: 10px auto;
        }
        .tarjeta h2 {
            color: #333;
        }
        .tarjeta p {
            margin: 5px 0;
        }
    </style>
</head>
<body>

<h1>¡Hola <?php echo $saludo; ?>!</h1>
<p>Completá el formulario para generar tu tarjeta de perfil:</p>

<form method="POST" action="">
    <label>Nombre:</label><br>
    <input type="text" name="nombre" required><br><br>

    <label>Edad:</label><br>
    <input type="number" name="edad" required><br><br>

    <label>Hobby:</label><br>
    <input type="text" name="hobby" required><br><br>

    <button type="submit">Generar Perfil</button>
</form>

<?php if (!empty($nombre)) : ?>
    <div class="tarjeta">
        <h2><?php echo $nombre; ?></h2>
        <p>Edad: <?php echo $edad; ?></p>
        <p>Hobby: <?php echo $hobby; ?></p>
        <p><strong><?php echo $mensajePerfil; ?></strong></p>
    </div>
<?php endif; ?>

<script>
document.querySelector('form').addEventListener('submit', () => {
    alert("¡Tu tarjeta está lista!");
});
</script>

</body>
</html>
