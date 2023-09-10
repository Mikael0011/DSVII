<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado con imagenes </title>
</head>
<body>
    <h1>Resultado de las ventas con imagenes</h1>
    <?php
    if (isset($_POST['ventas'])) {
        $ventas = intval($_POST['ventas']);


        // Determinar qué imagen mostrar según el valor de ventas
        if ($ventas > 80) {
            $imagenMostrar = "img/80.png"; // Ruta de la imagen para ventas superiores al 80%
        } elseif ($ventas >= 50 && $ventas <= 79) {
            $imagenMostrar = "img/50.png"; // Ruta de la imagen para ventas entre 50% y 79%
        } else {
            $imagenMostrar = "img/49.png"; // Ruta de la imagen para ventas por debajo del 50%
        }

        // Mostrar la imagen correspondiente
        echo "<img src=\"$imagenMostrar\" alt=\"Imagen de Ventas\">";
    } else {
        echo "<p>Por favor, ingrese un valor de ventas.</p>";
    }
    ?>
    <p><a href="lab41.html">Volver al formulario</a></p>
</body>
</html>
