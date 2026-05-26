<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Captura de Datos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="dive">
        <h1>Captura de datos personales</h1>
        <br>
        <h2>Ingresa los datos que se te piden</h2>
        <br>
        <p>Mi primera encuesta</p>
        <hr>

        <!-- ACTION apunta a resultados.php y METHOD es POST -->
        <form action="resultados.php" method="POST">
            <label>Nombre:</label>
            <input type="text" name="nombre" placeholder="Escribe tu nombre"><br><br>

            <label>Edad:</label>
            <input type="number" name="edad" placeholder="Tu edad"><br><br>

            <label>Ciudad donde vives:</label>
            <input type="text" name="ciudad" placeholder="Ciudad"><br><br>

            <label>Pasatiempo favorito:</label>
            <input type="text" name="pasatiempo" placeholder="Ej. leer, correr"><br><br>

            <button type="submit">Registrar los datos ingresados</button>
        </form>
    </div>

    <!-- Agregar el script de la ventana emergente -->
    <script src="app.js"></script>
</body>
</html>