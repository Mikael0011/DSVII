<!DOCTYPE html>
<html>
<head>
    <title>Resultado del Factorial</title>
</head>
<body>
    <h1>Resultado del Factorial</h1>
    <?php
    // Función para calcular el factorial de un número
    function calcularFactorial($n) {
        if ($n == 0) {
            return 1;
        } else {
            return $n * calcularFactorial($n - 1);
        }
    }

    if (isset($_POST['numero'])) {
        $numero = intval($_POST['numero']);

        if ($numero >= 0) {
            $factorial = calcularFactorial($numero);
            echo "<p>El factorial de $numero es: $factorial</p>";
        } else {
            echo "<p>Por favor, ingrese un numero no negativo.</p>";
        }
    } else {
        echo "<p>Por favor, ingrese un numero.</p>";
    }
    ?>
</body>
</html>
