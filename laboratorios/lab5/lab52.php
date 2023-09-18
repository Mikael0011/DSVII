<?php
if (isset($_FILES['nombre_archivo_cliente']) && is_uploaded_file($_FILES['nombre_archivo_cliente']['tmp_name'])) {

    $nombreDirectorio = "archivos/";


    $tamanioMaximo = 1 * 1024 * 1024; 

    
    if ($_FILES['nombre_archivo_cliente']['size'] > $tamanioMaximo) {
        echo "El archivo es demasiado grande. Máximo permitido: 1MB.<br>";
    } else {
     
        $extensionesPermitidas = array('jpg', 'jpeg', 'gif', 'png');
        $nombrearchivo = strtolower($_FILES['nombre_archivo_cliente']['name']);
        $extension = pathinfo($nombrearchivo, PATHINFO_EXTENSION);

        if (in_array($extension, $extensionesPermitidas)) {
            $nombreCompleto = $nombreDirectorio . $nombrearchivo;

            if (is_file($nombreCompleto)) {
                $idUnico = time();
                $nombrearchivo = $idUnico . "-" . $nombrearchivo;
                echo "Archivo repetido, se cambió el nombre a $nombrearchivo <br><br>";
            }

            move_uploaded_file($_FILES['nombre_archivo_cliente']['tmp_name'], $nombreDirectorio . $nombrearchivo);
            echo "El archivo se ha subido satisfactoriamente al directorio $nombreDirectorio <br>";
        } else {
            echo "El archivo no es una imagen válida. Formatos permitidos: jpg, jpeg, gif, png.<br>";
        }
    }
} else {
    echo "No se ha podido subir el archivo <br>";
}
?>
