<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$nombre = $_POST['nombre'] ?? 'No especificado';
$edad = $_POST['edad'] ?? 'No especificada';
$ciudad = $_POST['ciudad'] ?? 'No especificada';
$pasatiempo = $_POST['pasatiempo'] ?? 'No especificado';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>¡Resultados de datos!</title>
    <link rel="stylesheet" href="style.css">
    <script src="app.js"></script>
</head>
<body>
    <div class="dive2">
        <h1>Resultados</h1>

        <img src="imagen.webp" alt="Imagen" width="150">
        
        <h2>¡Bien hecho!</h2>

        <p><strong>Nombre:</strong> <?php echo htmlspecialchars($nombre); ?></p>
        <p><strong>Edad:</strong> <?php echo htmlspecialchars($edad); ?></p>
        <p><strong>Ciudad:</strong> <?php echo htmlspecialchars($ciudad); ?></p>
        <p><strong>Pasatiempo:</strong> <?php echo htmlspecialchars($pasatiempo); ?></p>

        <br>
        <button onclick="Alert.show('¿Deseas agregar otro registro?', 'index.php')">
            Ingresar nuevos datos
        </button>
    </div>

    <script>
        Alert.show('Tus datos han sido guardados exitosamente', 'index.php');
    </script>
</body>
</html>