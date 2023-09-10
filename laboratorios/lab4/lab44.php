<?php
// Iniciar la sesión para mantener el arreglo entre solicitudes
session_start();

// Crear el arreglo si no existe en la sesión
if (!isset($_SESSION['arregloPares'])) {
    $_SESSION['arregloPares'] = array();
}

if (isset($_POST['numero'])) {
    $numero = intval($_POST['numero']);

    if ($numero % 2 == 0) {
        // Si el número es par, agrégalo al arreglo
        $_SESSION['arregloPares'][] = $numero;
    } else {
        // Si el número es impar, muestra un mensaje de error
        echo "El número ingresado no es par. Inténtelo nuevamente.";
    }
}

// Mostrar el contenido actual del arreglo
echo "<h2>Arreglo de Números Pares:</h2>";
if (isset($_SESSION['arregloPares']) && !empty($_SESSION['arregloPares'])) {
    echo "<ul>";
    foreach ($_SESSION['arregloPares'] as $par) {
        echo "<li>$par</li>";
    }
    echo "</ul>";
} else {
    echo "<p>No se han ingresado números pares.</p>";
}

// Enlace para volver al formulario
echo '<a href="lab44.html">Volver al formulario</a>';
?>
