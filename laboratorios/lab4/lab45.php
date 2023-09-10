<!DOCTYPE html>
<html>
<head>
    <title>Resultado - Matriz Identidad</title>
</head>
<body>
    <h1>Resultado - Matriz Identidad</h1>
    <?php
    if (isset($_POST['n'])) {
        $n = intval($_POST['n']);
        
        if ($n % 2 == 0) { // Verificar que N sea un número par
            echo "<h2>Matriz Identidad de orden $n:</h2>";
            echo "<table border='1'>";
            for ($i = 0; $i < $n; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $n; $j++) {
                    if ($i == $j) {
                        echo "<td>1</td>";
                    } else {
                        echo "<td>0</td>";
                    }
                }
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>Por favor, ingrese un número par.</p>";
        }
    } else {
        echo "<p>Por favor, ingrese un valor de N.</p>";
    }
    ?>
    <p><a href="lab45.html">Volver al formulario</a></p>
</body>
</html>
