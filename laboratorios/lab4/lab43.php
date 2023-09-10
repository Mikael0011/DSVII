<?php
// Crear un arreglo vacío
$arreglo = array();

// Llenar el arreglo con valores diferentes
while (count($arreglo) < 20) {
    $nuevo_valor = rand(1, 100);  // Generar un número aleatorio entre 1 y 100
    if (!in_array($nuevo_valor, $arreglo)) {
        $arreglo[] = $nuevo_valor;
    }
}

// Mostrar la matriz unidimensional en forma de tabla
echo "<table border='1'>";
echo "<tr><th>Posición</th><th>Valor</th></tr>";

foreach ($arreglo as $posicion => $valor) {
    echo "<tr><td>$posicion</td><td>$valor</td></tr>";
}

echo "</table>";

// Encontrar el elemento mayor y su posición
$elemento_mayor = $arreglo[0];
$posicion_mayor = 0;

foreach ($arreglo as $posicion => $valor) {
    if ($valor > $elemento_mayor) {
        $elemento_mayor = $valor;
        $posicion_mayor = $posicion;
    }
}

// Mostrar la posición y el valor del elemento mayor
echo "<p>El elemento mayor se encuentra en la posición $posicion_mayor y tiene el valor $elemento_mayor.</p>";
?>
